<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Received</title>
    <style>
        /* Base Styles */
        body, html { margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333333; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        
        /* Header */
        .header { background-color: #0f172a; padding: 30px 20px; text-align: center; border-bottom: 3px solid #38bdf8; }
        .header h1 { color: #ffffff; margin: 0; font-size: 22px; text-transform: uppercase; letter-spacing: 1px; }
        
        /* Content */
        .content { padding: 35px 25px; }
        .greeting { font-size: 18px; font-weight: bold; color: #0f172a; margin-bottom: 15px; }
        .message-text { color: #475569; margin-bottom: 25px; }
        
        /* Quote Box */
        .quote-box { background-color: #f8fafc; padding: 20px; border-left: 4px solid #38bdf8; margin-top: 20px; border-radius: 0 6px 6px 0; }
        .quote-label { font-size: 11px; font-weight: bold; color: #64748b; text-transform: uppercase; margin-bottom: 5px; display: block; }
        .quote-content { font-style: italic; color: #334155; }

        /* Footer */
        .footer { background-color: #f1f5f9; padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Message Received</h1>
        </div>
        <div class="content">
            <div class="greeting">Hello,</div>
            <p class="message-text">Thank you for reaching out! I have received your inquiry and will get back to you as soon as possible.</p>
            <p class="message-text">In the meantime, here is a copy of the message you sent:</p>
            
            <div class="quote-box">
                <span class="quote-label">Your Message:</span>
                <div class="quote-content">
                    "{{ $user['message'] ?? '' }}"
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} My Portfolio. All rights reserved.
        </div>
    </div>
</body>
</html>