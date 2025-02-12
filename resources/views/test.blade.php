<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Offer Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal {
            display: flex;
            max-width: 800px;
            width: 90%;
            background: white;
            border-radius: 4px;
            overflow: hidden;
        }

        .modal-image {
            flex: 1;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/form-JjHbe9Gc1qD0OFuSBz6rAsLjuaWqNQ.png');
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }

        .modal-content {
            flex: 1;
            padding: 2rem;
            position: relative;
        }

        .welcome-text {
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #000;
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }

        .description {
            font-size: 0.875rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .email-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }

        .submit-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #8B2E1D;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }

        .submit-button:hover {
            background-color: #7A2819;
        }

        .dismiss-link {
            display: block;
            text-align: center;
            color: #666;
            text-decoration: none;
            font-size: 0.875rem;
        }

        .dismiss-link:hover {
            text-decoration: underline;
        }

        .close-button {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        @media (max-width: 640px) {
            .modal {
                flex-direction: column;
            }

            .modal-image {
                min-height: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-image"></div>
        <div class="modal-content">
            <button type="button" class="close-button">&times;</button>
            <p class="welcome-text">Welcome offer</p>
            <h1 class="title">Free gift on your first order</h1>
            <p class="description">Get your promo code and apply it at checkout.</p>
            <form method="POST" action="/submit">
                <input 
                    type="email" 
                    name="email" 
                    class="email-input" 
                    placeholder="Enter your email address"
                    required
                >
                <input 
                    type="submit" 
                    value="Get free gift →" 
                    class="submit-button"
                >
            </form>
            <a href="#" class="dismiss-link">No thanks</a>
        </div>
    </div>
</body>
</html>