<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory, Filterable;

    protected $guarded = ['id'];

    public function type() {
        return $this->belongsTo(DocumentType::class, 'document_type_id');
    }

    public function attachments() {
        return $this->hasMany(Attachment::class, 'document_id');
    }

    public function family_members() {
        return $this->hasMany(FamilyMember::class, 'document_id');
    }

    public function working_records() {
        return $this->hasMany(WorkingRecord::class, 'document_id');
    }

    public function degrees() {
        return $this->hasMany(Degree::class, 'document_id');
    }

    public function status() {
        return $this->belongsTo(DocumentStatus::class, 'document_status_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function progress() {
        return $this->hasOne(Progress::class, 'document_id');
    }

    public function secondary_document() {
        return $this->hasOne(Document::class, 'parrent_id');
    }

    public function organization() {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
    
    public function getLawDegreeAttribute() {
        return $this->degrees->where('degree_type_id', 1)->first();
    }

    public function getGraduateDegreeAttribute() {
        return $this->degrees->where('degree_type_id', 2)->first();
    }
}
