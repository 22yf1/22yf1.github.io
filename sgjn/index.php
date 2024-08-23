<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>跳转提示</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #6D83F2, #8C62F3);
            color: #fff;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 24px;
            margin-bottom: 10px;
            animation: fadeInText 2s ease-in-out infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInText {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .spinner {
            margin-top: 20px;
            width: 40px;
            height: 40px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s infinite linear;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">正在跳转最新网址，请稍候...</div>
        <div class="spinner"></div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "https://22yf1.sclgjs.us.kg/sgjn";
        }, 1000); // 1秒后跳转
    </script>
</body>
</html>
