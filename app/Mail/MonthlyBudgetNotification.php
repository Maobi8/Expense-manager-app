<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MonthlyBudgetNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $budgetPercentage;
    public $monthlyBudget;
    public $monthlyTotal;

    public function __construct($user, $budgetPercentage, $monthlyBudget, $monthlyTotal)
    {
        $this->user = $user;
        $this->budgetPercentage = $budgetPercentage;
        $this->monthlyBudget = $monthlyBudget;
        $this->monthlyTotal = $monthlyTotal;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Monthly Budget Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.monthly_budget_notification', // Correct path to your email view
            with: [
                'user' => $this->user,
                'budgetPercentage' => $this->budgetPercentage,
                'monthlyBudget' => $this->monthlyBudget,
                'monthlyTotal' => $this->monthlyTotal,
            ]
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
