<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff512f, #dd2476);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
            padding: 60px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 72px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
            animation: glow 2s ease-in-out infinite alternate;
        }

        p {
            font-size: 24px;
            color: #ddd;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
            margin-bottom: 40px;
        }

        a {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ffba3d;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #ffc600;
            box-shadow: 0 0 30px rgba(255, 198, 0, 0.8);
            transform: scale(1.1);
        }

        @keyframes glow {
            from {
                text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
            }
            to {
                text-shadow: 2px 2px 20px rgba(255, 198, 0, 0.8);
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404 Not Found</h1>
        <p>Oops! The page you're looking for cannot be found.</p>
        <a href="/">Go Back</a>
    </div>
</body>
</html>
