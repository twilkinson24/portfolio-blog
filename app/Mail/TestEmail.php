<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

class TestEmail extends Mailable {
     use Queueable, SerializesModels;
     public $data;
     public function __construct($data) {
          $this->data = $data;
     }

     public function build() {
          $address = 'info@twilkinson.com';
          $subject = 'New contact message from twilkinson.com';
          $name = 'Admin';
          return $this->view('emails.contact')->from($address, $name)->subject($subject)->with(['name' => $this->data['name'], 'email' => $this->data['email'], 'msg' => $this->data['msg']]);
     }
}

?>