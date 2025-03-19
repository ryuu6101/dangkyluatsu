<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Document;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class DocumentApproveMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datetime;
    public $site_config;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Document $document,
        public User $user,
        $datetime,
    )
    {
        $this->datetime = $datetime;
        $this->site_config = DB::table('site_configs')->first();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('doanluatsudanang@gmail.com', $this->site_config->company_name),
            subject: '['.mb_strtoupper($this->site_config->company_name).']: Thông báo Đăng ký hồ sơ '.
                        ($this->document->document_type_id == 1 ? 'Tập sự' : 'gia nhập đoàn').' thành công',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.document-approve-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
