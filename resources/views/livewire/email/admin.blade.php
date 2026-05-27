<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Request</title>
    <style>
        /* Base Styles */
        body, html { margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333333; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        
        /* Header */
        .header { background-color: #0f172a; padding: 30px 20px; text-align: center; border-bottom: 3px solid #38bdf8; }
        .header h1 { color: #ffffff; margin: 0; font-size: 22px; text-transform: uppercase; letter-spacing: 1px; }
        .header span { color: #38bdf8; }

        /* Content */
        .content { padding: 30px 20px; }
        .intro { font-size: 16px; margin-bottom: 25px; color: #0f172a; font-weight: bold; }
        .field-group { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: bold; color: #64748b; text-transform: uppercase; margin-bottom: 6px; display: block; letter-spacing: 0.5px; }
        .value { font-size: 15px; color: #1e293b; background-color: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; }
        
        /* Button */
        .action-btn { display: inline-block; background-color: #0f172a; color: #38bdf8; padding: 12px 25px; text-decoration: none; border-radius: 6px; font-weight: bold; margin-top: 10px; font-size: 14px; }
        .action-btn:hover { background-color: #1e293b; }

        /* Footer */
        .footer { background-color: #f1f5f9; padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New <span>Client</span> Inquiry</h1>
        </div>
        <div class="content">
            <p class="intro">Hello Admin,</p>
            <p style="margin-bottom: 25px; color: #475569;">A new client has just reached out via your portfolio contact form. Here are the details of the request:</p>
            
            <div class="field-group">
                <span class="label">Sender Email</span>
                <div class="value">{{ $user['email'] ?? 'N/A' }}</div>
            </div>

            <div class="field-group">
                <span class="label">Message Body</span>
                <div class="value" style="white-space: pre-wrap;">{{ $user['message'] ?? 'No message content provided.' }}</div>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="mailto:{{ $user['email'] ?? '' }}" class="action-btn">Reply to Client</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} My Portfolio. All rights reserved.
        </div>
    </div>
</body>
</html>