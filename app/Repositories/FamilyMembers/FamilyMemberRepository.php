<?php

namespace App\Repositories\FamilyMembers;

use App\Models\FamilyMember;
use App\Repositories\BaseRepository;

class FamilyMemberRepository extends BaseRepository implements FamilyMemberRepositoryInterface
{
    public function getModel() {
        return FamilyMember::class;
    }
}