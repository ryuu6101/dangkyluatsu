<?php

namespace App\Mail;

use App\Models\Document;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class DocumentDeclineMail extends Mailable
{
    use Queueable, SerializesModels;

    public $note;
    public $site_config;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Document $document,
        $note
    )
    {
        $this->note = $note;
        $this->site_config = DB::table('site_configs')->first();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('doanluatsudanang@gmail.com', $this->site_config->company_name),
            subject: '['.mb_strtoupper($this->site_config->company_name).']: Thông báo về việc từ chối hồ sơ '.
                    ($this->document->document_type_id == 1 ? 'Tập sự' : 'đăng ký gia nhập đoàn luật sư'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.document-decline-mail',
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
