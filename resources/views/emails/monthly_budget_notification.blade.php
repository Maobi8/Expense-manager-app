<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Budget Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 28px;
            color: #007BFF;
            margin: 0;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .content p {
            margin: 15px 0;
        }
        .content strong {
            color: #333;
        }
        .highlight {
            color: #e67e22;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #aaa;
        }
        .footer a {
            color: #007BFF;
            text-decoration: none;
        }
        .button {
            
            background-color: #007BFF;
            color: #ffffff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }
        @media screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
            }
            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Monthly Budget Notification</h1>
        </div>

        <div class="content">
            <p>Hi <strong>{{ $user->name }}</strong>,</p>

            <p>This is a friendly reminder that you have reached <strong>{{ number_format($budgetPercentage, 2) }}%</strong> of your monthly budget of <strong>${{ number_format($monthlyBudget, 2) }}</strong>.</p>

            <p>Your total expenses for this month are: <strong>${{ number_format($monthlyTotal, 2) }}</strong>.</p>

            @if ($budgetPercentage >= 100)
                <p class="highlight"><strong>Warning:</strong> You have exceeded your monthly budget.</p>
            @else
                <p>You still have <strong>${{ number_format($monthlyBudget - $monthlyTotal, 2) }}</strong> left in your budget.</p>
            @endif

            <p>Keep up the good work and stay within your budget!</p>

            <a href="#" class="button">View Your Expenses</a>
        </div>

        <div class="footer">
            <p>Thank you for Using Expense-Manager-App</p>
        </div>
    </div>
</body>
</html>
