<html>

<head>
    <title>Jamtangan.com | Linktree</title>
    <link href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.ico" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: #b4b4b4;
            justify-content: center;
        }

        .container-custom {
            width: 100%;
            max-width: 600px;
            min-height: 100vh;
            background: #fff;
            margin-top: 40px;
            border-radius: 28px 28px 0 0;
            box-shadow: 0 24px 32px rgba(0, 0, 0, 0.15);
        }

        .header {
            text-align: center;
            padding-top: 80px;
            position: relative;
        }

        .topbar {
            position: absolute;
            top: 16px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            transition: 0.2s;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 1);
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        .icon-btn button {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn svg {
            fill: black;
            width: 18px;
            height: 18px;
        }

        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin: 10px auto;
        }

        .name {
            flex-direction: column;
            align-items: center;
            font-weight: 650;
            gap: -5px;
            margin-top: 10px;
        }

        .verified {
            width: 16px;
            height: 16px;
        }

        .name p {
            font-size: 13px;
            color: #666;
            margin: 0;
        }

        .banner {
            padding: 14px;
        }

        .banner-box {
            display: block;
            border-radius: 14px;
            overflow: hidden;
            background: #2c2f31;
        }

        .banner-image {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-caption {
            font-size: 16px;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-weight: 700;
        }

        .links-section {
            padding: 10px 14px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn-link {
            display: flex;
            align-items: center;
            padding: 12px 14px;
            background: rgba(46, 50, 53, 1);
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            max-width: ;
        }

        .btn-link:hover {
            background: #1f2123;
        }

        .btn-link-thumbnail,
        .btn-link-icon {
            width: 36px;
            height: 36px;
            border-radius: 5px;
            margin-right: 10px;
            flex-shrink: 0;
        }

        .btn-link-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-link-icon img {
            filter: invert(1);
        }

        .btn-link-label {
            flex: 1;
            text-align: center;
            font-size: 16px;
            font-weight: 700;
        }

        .menu-dot {
            color: #888;
        }

        .socials-section {
            display: flex;
            justify-content: center;
            gap: 12px;
            padding: 20px 0 10px;
        }

        .btn-socialmedia {
            color: black;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .footer {
            text-align: center;
            font-size: 11px;
            color: #777;
            padding: 10px 0 25px;
        }

        .footer a {
            color: #777;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container container-custom p-0">
        <div class="header">
            <div class="topbar">
                <div class="icon-btn">
                    <button>
                        <svg fill="none" height="18" width="18" viewBox="0 0 28 28">
                            <path
                                d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
                <div class="icon-btn">
                    <button>
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <img src="https://ugc.production.linktr.ee/5faf2f24-1ee1-47c8-92d3-cd305cb9f0cc_pp-IG.jpeg?io=true&size=avatar-v3_0"
                class="profile-img">
            <h4 class="name">JAMTANGAN.COM <img class="h-1 w-1 ml-1 align-middle"
                    src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGxpbmVhckdyYWRpZW50IGlkPSJhIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiNmZmYiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNmZmYiIHN0b3Atb3BhY2l0eT0iMCIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJiIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjExLjk5OTYiIHgyPSIxMS45OTk2IiB4bGluazpocmVmPSIjYSIgeTE9Ii41NzMwNSIgeTI9IjIzLjIxMDMiLz48cmFkaWFsR3JhZGllbnQgaWQ9ImMiIGN4PSIwIiBjeT0iMCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyMi43NDUzIDIyLjYzNzMgLTYuMDI4MjkgMTYuOTI4NiAuNjI2OTUzIC41NzMwNDgpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgcj0iMSIgeGxpbms6aHJlZj0iI2EiLz48bGluZWFyR3JhZGllbnQgaWQ9ImQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMTEuOTk5NiIgeDI9IjExLjk5OTYiIHkxPSIuNTczMDQ4IiB5Mj0iMjMuMjEwMyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLW9wYWNpdHk9IjAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3Atb3BhY2l0eT0iLjE2Ii8+PC9saW5lYXJHcmFkaWVudD48Y2xpcFBhdGggaWQ9ImUiPjxwYXRoIGQ9Im0wIDBoMjR2MjRoLTI0eiIvPjwvY2xpcFBhdGg+PGNsaXBQYXRoIGlkPSJmIj48cGF0aCBkPSJtMCAwaDI0djI0aC0yNHoiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNlKSI+PGcgY2xpcC1wYXRoPSJ1cmwoI2YpIj48cGF0aCBkPSJtMTEuMTcwOSAxLjIwNDg4Yy40NjM2LS40NDIyNCAxLjE5MzYtLjQ0MjI0MiAxLjY1NzIgMGwuNDE2LjM5NzQ2Yy40OTIyLjQ2OTM2IDEuMjA3Mi42MjExOCAxLjg0NzcuMzkyNThsLjU0Mi0uMTkzMzZjLjU2NTctLjIwMTk0IDEuMTg2Ni4wNDU1NCAxLjQ2MjkuNTY1NDNsLjA1MDguMTA4NC4yMTg3LjUzMTI1di4wMDA5OGMuMjU4OS42Mjg3Ni44NTAyIDEuMDU3NzYgMS41MjgzIDEuMTA5MzdsLjU3MzMuMDQzOTVjLjYzODkuMDQ4NjIgMS4xMjY5LjU5MTAyIDEuMTA4NCAxLjIzMTQ0bC0uMDE2Ni41NzUyYy0uMDE5NS42Nzk3Ni4zNDU5IDEuMzEyNzMuOTQ0MyAxLjYzNTc0bC41MDY4LjI3MzQ0Yy41NjM4LjMwNDMzLjc4OS45OTc2Ny41MTE4IDEuNTc1MTlsLS4yNDkxLjUxODU2Yy0uMjk0Mi42MTMxOS0uMjE4MSAxLjM0MDI5LjE5NzMgMS44Nzg4OWwuMzUxNi40NTUxYy4zOTEzLjUwNzIuMzE1MiAxLjIzMjUtLjE3MjkgMS42NDc1bC0uNDM4NS4zNzNjLS41MTgyLjQ0MDMtLjc0NDMgMS4xMzQ5LS41ODM5IDEuNzk1OWwuMTM1Ny41NTk2Yy4xNTEyLjYyMjUtLjIxMzMgMS4yNTQtLjgyODEgMS40MzQ1bC0uNTUxOC4xNjIxYy0uNjUyNi4xOTE1LTEuMTQyMy43MzQ0LTEuMjY0NiAxLjQwMzRsLS4xMDM2LjU2NjRjLS4xMTUyLjYzMDItLjcwNDggMS4wNTg4LTEuMzM5OC45NzM2bC0uNTcwMy0uMDc2MmMtLjY3NDItLjA5MDUtMS4zNDE3LjIwNjItMS43MjU2Ljc2NzZsLS4zMjQyLjQ3NTZjLS4zNjE1LjUyODktMS4wNzU2LjY3OTktMS42MjExLjM0MzhsLS40ODkzLS4zMDE4Yy0uNTc5LS4zNTctMS4zMTA1LS4zNTctMS44ODk2IDBsLS40ODkzLjMwMThjLS41NDUzLjMzNi0xLjI1ODUuMTg0OS0xLjYyMDA5LS4zNDM4bC0uMzI1MTktLjQ3NTZjLS4zODM4NS0uNTYxMy0xLjA1MTUyLS44NTgxLTEuNzI1NTktLjc2NzZsLS41NzAzMS4wNzYyYy0uNjM0OTguMDg1MS0xLjIyNDctLjM0MzUtMS4zMzk4NC0uOTczNmwtLjEwMzUyLS41NjY0Yy0uMTIyMjktLjY2ODktLjYxMTIzLTEuMjExOC0xLjI2MzY3LTEuNDAzNGwtLjU1Mjc0LS4xNjIxYy0uNjE0NjgtLjE4MDYtLjk3OTI3LS44MTIxLS44MjgxMi0xLjQzNDVsLjEzNTc0LS41NTk2Yy4xNjAzNC0uNjYxLS4wNjU2OS0xLjM1NTUtLjU4Mzk4LTEuNzk1OWwtLjQzODQ4LS4zNzNjLS40ODc5NTctLjQxNS0uNTY0MTE4LTEuMTQwMy0uMTcyODUtMS42NDc1bC4zNTE1Ni0uNDU1MWMuNDE1NDgtLjUzODYuNDkxNy0xLjI2NTcuMTk3MjctMS44Nzg4OWwtLjI0OTAzLS41MTg1NmMtLjI3NzI2LS41Nzc0NS0uMDUxODUtMS4yNzA4MS41MTE3Mi0xLjU3NTE5bC41MDY4NC0uMjczNDRjLjU5ODUyLS4zMjI5OC45NjM3OS0uOTU1OTIuOTQ0MzMtMS42MzU3NGwtLjAxNjYtLjU3NTJjLS4wMTg0Mi0uNjQwNDMuNDY5NTctMS4xODI3NyAxLjEwODQtMS4yMzE0NGwuNTc0MjItLjA0Mzk1Yy42NzgxLS4wNTE3NSAxLjI2ODcxLS40ODEzNiAxLjUyNzM0LTEuMTEwMzVsLjIxOTczLS41MzEyNWMuMjQzNjUtLjU5MjU3LjkwOTI5LS44ODkyMyAxLjUxMjY5LS42NzM4M2wuNTQyLjE5MzM2Yy42NDA1LjIyODY5IDEuMzU1NDcuMDc2NzMgMS44NDc2Ny0uMzkyNTh6IiBmaWxsPSIjZDI5MDE2Ii8+PHBhdGggZD0ibTExLjE3MDkgMS4yMDQ4OGMuNDYzNi0uNDQyMjQgMS4xOTM2LS40NDIyNDIgMS42NTcyIDBsLjQxNi4zOTc0NmMuNDkyMi40NjkzNiAxLjIwNzIuNjIxMTggMS44NDc3LjM5MjU4bC41NDItLjE5MzM2Yy41NjU3LS4yMDE5NCAxLjE4NjYuMDQ1NTQgMS40NjI5LjU2NTQzbC4wNTA4LjEwODQuMjE4Ny41MzEyNXYuMDAwOThjLjI1ODkuNjI4NzYuODUwMiAxLjA1Nzc2IDEuNTI4MyAxLjEwOTM3bC41NzMzLjA0Mzk1Yy42Mzg5LjA0ODYyIDEuMTI2OS41OTEwMiAxLjEwODQgMS4yMzE0NGwtLjAxNjYuNTc1MmMtLjAxOTUuNjc5NzYuMzQ1OSAxLjMxMjczLjk0NDMgMS42MzU3NGwuNTA2OC4yNzM0NGMuNTYzOC4zMDQzMy43ODkuOTk3NjcuNTExOCAxLjU3NTE5bC0uMjQ5MS41MTg1NmMtLjI5NDIuNjEzMTktLjIxODEgMS4zNDAyOS4xOTczIDEuODc4ODlsLjM1MTYuNDU1MWMuMzkxMy41MDcyLjMxNTIgMS4yMzI1LS4xNzI5IDEuNjQ3NWwtLjQzODUuMzczYy0uNTE4Mi40NDAzLS43NDQzIDEuMTM0OS0uNTgzOSAxLjc5NTlsLjEzNTcuNTU5NmMuMTUxMi42MjI1LS4yMTMzIDEuMjU0LS44MjgxIDEuNDM0NWwtLjU1MTguMTYyMWMtLjY1MjYuMTkxNS0xLjE0MjMuNzM0NC0xLjI2NDYgMS40MDM0bC0uMTAzNi41NjY0Yy0uMTE1Mi42MzAyLS43MDQ4IDEuMDU4OC0xLjMzOTguOTczNmwtLjU3MDMtLjA3NjJjLS42NzQyLS4wOTA1LTEuMzQxNy4yMDYyLTEuNzI1Ni43Njc2bC0uMzI0Mi40NzU2Yy0uMzYxNS41Mjg5LTEuMDc1Ni42Nzk5LTEuNjIxMS4zNDM4bC0uNDg5My0uMzAxOGMtLjU3OS0uMzU3LTEuMzEwNS0uMzU3LTEuODg5NiAwbC0uNDg5My4zMDE4Yy0uNTQ1My4zMzYtMS4yNTg1LjE4NDktMS42MjAwOS0uMzQzOGwtLjMyNTE5LS40NzU2Yy0uMzgzODUtLjU2MTMtMS4wNTE1Mi0uODU4MS0xLjcyNTU5LS43Njc2bC0uNTcwMzEuMDc2MmMtLjYzNDk4LjA4NTEtMS4yMjQ3LS4zNDM1LTEuMzM5ODQtLjk3MzZsLS4xMDM1Mi0uNTY2NGMtLjEyMjI5LS42Njg5LS42MTEyMy0xLjIxMTgtMS4yNjM2Ny0xLjQwMzRsLS41NTI3NC0uMTYyMWMtLjYxNDY4LS4xODA2LS45NzkyNy0uODEyMS0uODI4MTItMS40MzQ1bC4xMzU3NC0uNTU5NmMuMTYwMzQtLjY2MS0uMDY1NjktMS4zNTU1LS41ODM5OC0xLjc5NTlsLS40Mzg0OC0uMzczYy0uNDg3OTU3LS40MTUtLjU2NDExOC0xLjE0MDMtLjE3Mjg1LTEuNjQ3NWwuMzUxNTYtLjQ1NTFjLjQxNTQ4LS41Mzg2LjQ5MTctMS4yNjU3LjE5NzI3LTEuODc4ODlsLS4yNDkwMy0uNTE4NTZjLS4yNzcyNi0uNTc3NDUtLjA1MTg1LTEuMjcwODEuNTExNzItMS41NzUxOWwuNTA2ODQtLjI3MzQ0Yy41OTg1Mi0uMzIyOTguOTYzNzktLjk1NTkyLjk0NDMzLTEuNjM1NzRsLS4wMTY2LS41NzUyYy0uMDE4NDItLjY0MDQzLjQ2OTU3LTEuMTgyNzcgMS4xMDg0LTEuMjMxNDRsLjU3NDIyLS4wNDM5NWMuNjc4MS0uMDUxNzUgMS4yNjg3MS0uNDgxMzYgMS41MjczNC0xLjExMDM1bC4yMTk3My0uNTMxMjVjLjI0MzY1LS41OTI1Ny45MDkyOS0uODg5MjMgMS41MTI2OS0uNjczODNsLjU0Mi4xOTMzNmMuNjQwNS4yMjg2OSAxLjM1NTQ3LjA3NjczIDEuODQ3NjctLjM5MjU4eiIgZmlsbD0idXJsKCNiKSIgZmlsbC1vcGFjaXR5PSIuMiIvPjxwYXRoIGQ9Im0xMS4xNzA5IDEuMjA0ODhjLjQ2MzYtLjQ0MjI0IDEuMTkzNi0uNDQyMjQyIDEuNjU3MiAwbC40MTYuMzk3NDZjLjQ5MjIuNDY5MzYgMS4yMDcyLjYyMTE4IDEuODQ3Ny4zOTI1OGwuNTQyLS4xOTMzNmMuNTY1Ny0uMjAxOTQgMS4xODY2LjA0NTU0IDEuNDYyOS41NjU0M2wuMDUwOC4xMDg0LjIxODcuNTMxMjV2LjAwMDk4Yy4yNTg5LjYyODc2Ljg1MDIgMS4wNTc3NiAxLjUyODMgMS4xMDkzN2wuNTczMy4wNDM5NWMuNjM4OS4wNDg2MiAxLjEyNjkuNTkxMDIgMS4xMDg0IDEuMjMxNDRsLS4wMTY2LjU3NTJjLS4wMTk1LjY3OTc2LjM0NTkgMS4zMTI3My45NDQzIDEuNjM1NzRsLjUwNjguMjczNDRjLjU2MzguMzA0MzMuNzg5Ljk5NzY3LjUxMTggMS41NzUxOWwtLjI0OTEuNTE4NTZjLS4yOTQyLjYxMzE5LS4yMTgxIDEuMzQwMjkuMTk3MyAxLjg3ODg5bC4zNTE2LjQ1NTFjLjM5MTMuNTA3Mi4zMTUyIDEuMjMyNS0uMTcyOSAxLjY0NzVsLS40Mzg1LjM3M2MtLjUxODIuNDQwMy0uNzQ0MyAxLjEzNDktLjU4MzkgMS43OTU5bC4xMzU3LjU1OTZjLjE1MTIuNjIyNS0uMjEzMyAxLjI1NC0uODI4MSAxLjQzNDVsLS41NTE4LjE2MjFjLS42NTI2LjE5MTUtMS4xNDIzLjczNDQtMS4yNjQ2IDEuNDAzNGwtLjEwMzYuNTY2NGMtLjExNTIuNjMwMi0uNzA0OCAxLjA1ODgtMS4zMzk4Ljk3MzZsLS41NzAzLS4wNzYyYy0uNjc0Mi0uMDkwNS0xLjM0MTcuMjA2Mi0xLjcyNTYuNzY3NmwtLjMyNDIuNDc1NmMtLjM2MTUuNTI4OS0xLjA3NTYuNjc5OS0xLjYyMTEuMzQzOGwtLjQ4OTMtLjMwMThjLS41NzktLjM1Ny0xLjMxMDUtLjM1Ny0xLjg4OTYgMGwtLjQ4OTMuMzAxOGMtLjU0NTMuMzM2LTEuMjU4NS4xODQ5LTEuNjIwMDktLjM0MzhsLS4zMjUxOS0uNDc1NmMtLjM4Mzg1LS41NjEzLTEuMDUxNTItLjg1ODEtMS43MjU1OS0uNzY3NmwtLjU3MDMxLjA3NjJjLS42MzQ5OC4wODUxLTEuMjI0Ny0uMzQzNS0xLjMzOTg0LS45NzM2bC0uMTAzNTItLjU2NjRjLS4xMjIyOS0uNjY4OS0uNjExMjMtMS4yMTE4LTEuMjYzNjctMS40MDM0bC0uNTUyNzQtLjE2MjFjLS42MTQ2OC0uMTgwNi0uOTc5MjctLjgxMjEtLjgyODEyLTEuNDM0NWwuMTM1NzQtLjU1OTZjLjE2MDM0LS42NjEtLjA2NTY5LTEuMzU1NS0uNTgzOTgtMS43OTU5bC0uNDM4NDgtLjM3M2MtLjQ4Nzk1Ny0uNDE1LS41NjQxMTgtMS4xNDAzLS4xNzI4NS0xLjY0NzVsLjM1MTU2LS40NTUxYy40MTU0OC0uNTM4Ni40OTE3LTEuMjY1Ny4xOTcyNy0xLjg3ODg5bC0uMjQ5MDMtLjUxODU2Yy0uMjc3MjYtLjU3NzQ1LS4wNTE4NS0xLjI3MDgxLjUxMTcyLTEuNTc1MTlsLjUwNjg0LS4yNzM0NGMuNTk4NTItLjMyMjk4Ljk2Mzc5LS45NTU5Mi45NDQzMy0xLjYzNTc0bC0uMDE2Ni0uNTc1MmMtLjAxODQyLS42NDA0My40Njk1Ny0xLjE4Mjc3IDEuMTA4NC0xLjIzMTQ0bC41NzQyMi0uMDQzOTVjLjY3ODEtLjA1MTc1IDEuMjY4NzEtLjQ4MTM2IDEuNTI3MzQtMS4xMTAzNWwuMjE5NzMtLjUzMTI1Yy4yNDM2NS0uNTkyNTcuOTA5MjktLjg4OTIzIDEuNTEyNjktLjY3MzgzbC41NDIuMTkzMzZjLjY0MDUuMjI4NjkgMS4zNTU0Ny4wNzY3MyAxLjg0NzY3LS4zOTI1OHoiIGZpbGw9InVybCgjYykiIGZpbGwtb3BhY2l0eT0iLjU1Ii8+PHBhdGggZD0ibTExLjE3MDkgMS4yMDQ4OGMuNDYzNi0uNDQyMjQgMS4xOTM2LS40NDIyNDIgMS42NTcyIDBsLjQxNi4zOTc0NmMuNDkyMi40NjkzNiAxLjIwNzIuNjIxMTggMS44NDc3LjM5MjU4bC41NDItLjE5MzM2Yy41NjU3LS4yMDE5NCAxLjE4NjYuMDQ1NTQgMS40NjI5LjU2NTQzbC4wNTA4LjEwODQuMjE4Ny41MzEyNXYuMDAwOThjLjI1ODkuNjI4NzYuODUwMiAxLjA1Nzc2IDEuNTI4MyAxLjEwOTM3bC41NzMzLjA0Mzk1Yy42Mzg5LjA0ODYyIDEuMTI2OS41OTEwMiAxLjEwODQgMS4yMzE0NGwtLjAxNjYuNTc1MmMtLjAxOTUuNjc5NzYuMzQ1OSAxLjMxMjczLjk0NDMgMS42MzU3NGwuNTA2OC4yNzM0NGMuNTYzOC4zMDQzMy43ODkuOTk3NjcuNTExOCAxLjU3NTE5bC0uMjQ5MS41MTg1NmMtLjI5NDIuNjEzMTktLjIxODEgMS4zNDAyOS4xOTczIDEuODc4ODlsLjM1MTYuNDU1MWMuMzkxMy41MDcyLjMxNTIgMS4yMzI1LS4xNzI5IDEuNjQ3NWwtLjQzODUuMzczYy0uNTE4Mi40NDAzLS43NDQzIDEuMTM0OS0uNTgzOSAxLjc5NTlsLjEzNTcuNTU5NmMuMTUxMi42MjI1LS4yMTMzIDEuMjU0LS44MjgxIDEuNDM0NWwtLjU1MTguMTYyMWMtLjY1MjYuMTkxNS0xLjE0MjMuNzM0NC0xLjI2NDYgMS40MDM0bC0uMTAzNi41NjY0Yy0uMTE1Mi42MzAyLS43MDQ4IDEuMDU4OC0xLjMzOTguOTczNmwtLjU3MDMtLjA3NjJjLS42NzQyLS4wOTA1LTEuMzQxNy4yMDYyLTEuNzI1Ni43Njc2bC0uMzI0Mi40NzU2Yy0uMzYxNS41Mjg5LTEuMDc1Ni42Nzk5LTEuNjIxMS4zNDM4bC0uNDg5My0uMzAxOGMtLjU3OS0uMzU3LTEuMzEwNS0uMzU3LTEuODg5NiAwbC0uNDg5My4zMDE4Yy0uNTQ1My4zMzYtMS4yNTg1LjE4NDktMS42MjAwOS0uMzQzOGwtLjMyNTE5LS40NzU2Yy0uMzgzODUtLjU2MTMtMS4wNTE1Mi0uODU4MS0xLjcyNTU5LS43Njc2bC0uNTcwMzEuMDc2MmMtLjYzNDk4LjA4NTEtMS4yMjQ3LS4zNDM1LTEuMzM5ODQtLjk3MzZsLS4xMDM1Mi0uNTY2NGMtLjEyMjI5LS42Njg5LS42MTEyMy0xLjIxMTgtMS4yNjM2Ny0xLjQwMzRsLS41NTI3NC0uMTYyMWMtLjYxNDY4LS4xODA2LS45NzkyNy0uODEyMS0uODI4MTItMS40MzQ1bC4xMzU3NC0uNTU5NmMuMTYwMzQtLjY2MS0uMDY1NjktMS4zNTU1LS41ODM5OC0xLjc5NTlsLS40Mzg0OC0uMzczYy0uNDg3OTU3LS40MTUtLjU2NDExOC0xLjE0MDMtLjE3Mjg1LTEuNjQ3NWwuMzUxNTYtLjQ1NTFjLjQxNTQ4LS41Mzg2LjQ5MTctMS4yNjU3LjE5NzI3LTEuODc4ODlsLS4yNDkwMy0uNTE4NTZjLS4yNzcyNi0uNTc3NDUtLjA1MTg1LTEuMjcwODEuNTExNzItMS41NzUxOWwuNTA2ODQtLjI3MzQ0Yy41OTg1Mi0uMzIyOTguOTYzNzktLjk1NTkyLjk0NDMzLTEuNjM1NzRsLS4wMTY2LS41NzUyYy0uMDE4NDItLjY0MDQzLjQ2OTU3LTEuMTgyNzcgMS4xMDg0LTEuMjMxNDRsLjU3NDIyLS4wNDM5NWMuNjc4MS0uMDUxNzUgMS4yNjg3MS0uNDgxMzYgMS41MjczNC0xLjExMDM1bC4yMTk3My0uNTMxMjVjLjI0MzY1LS41OTI1Ny45MDkyOS0uODg5MjMgMS41MTI2OS0uNjczODNsLjU0Mi4xOTMzNmMuNjQwNS4yMjg2OSAxLjM1NTQ3LjA3NjczIDEuODQ3NjctLjM5MjU4eiIgc3Ryb2tlPSJ1cmwoI2QpIiBzdHJva2Utd2lkdGg9Ii42Ii8+PHBhdGggZD0ibTcuNjA1NDcgMTEuMzQ0MSAzLjE4MTkzIDMuMTgyIDYuMzYzOS02LjM2Mzk5IiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMyIvPjwvZz48L2c+PC9zdmc+"
                    </h4>
                <p class="bio">🏆 #1 Watch Store in Indonesia</p>
        </div>
        <div class="banner">
            <a class="banner-box" href="https://www.jamtangan.com/event/Road-to-JT12" target="_blank">
                <img src="https://ugc.production.linktr.ee/201fd440-49dc-480a-b56f-bc00b353c7ca_banner-thematic-social-card-update-20260331175205.jpeg?io=true&size=thumbnail-feature-v1_0"
                    class="banner-image">
                <p class="banner-caption">ROAD TO JT12 – Diskon Hingga 87%, Voucher 6JT | JAMTANGAN.COM</p>
            </a>
        </div>
        <div class="links-section">
            <a class="btn-link" href="https://www.jamtangan.com/store-location" target="_blank">
                <img src="https://ugc.production.linktr.ee/17559444-dfaf-47e1-b673-e4b054e494d1_logo-new-200.png?io=true&size=thumbnail-stack_v1_0"
                    class="btn-link-thumbnail">
                <span class="btn-link-label">Belanja Jam Original di Toko Offline | JAMTANGAN.COM</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://www.jamtangan.com/jt-point" target="_blank">
                <img src="https://ugc.production.linktr.ee/b3981a5a-4301-415c-9e11-adcdf925d912_logo-new-200.png?io=true&size=thumbnail-stack_v1_0"
                    class="btn-link-thumbnail">
                <span class="btn-link-label">Info Terbaru JT Point JAMTANGAN.COM – #1 Watch Store in
                    Indonesia</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link"
                href="https://www.youtube.com/@jamtangandotcom?utm_medium=social&utm_source=linktree&utm_campaign=official+youtube+channel"
                target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/brand-youtube.svg" width="20">
                </div>
                <span class="btn-link-label">Official Youtube Channel</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://shopee.co.id/machtwatch" target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/discount.svg" width="20">
                </div>
                <span class="btn-link-label">Official Shop Shopee</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://www.tokopedia.com/machtwatch" target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/shopping-cart.svg" width="20">
                </div>
                <span class="btn-link-label">Official Shop Tokopedia</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://api.whatsapp.com/send?phone=6282288884040" target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/brand-whatsapp.svg" width="20">
                </div>
                <span class="btn-link-label">Official WhatsApp</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://www.jamtangan.com/store-location" target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/map-pin.svg" width="20">
                </div>
                <span class="btn-link-label">Gratis Cuci Jam di Toko Terdekat</span>
                <span class="menu-dot">⋮</span>
            </a>

            <a class="btn-link" href="https://www.jamtangan.com/corporate-order" target="_blank">
                <div class="btn-link-icon">
                    <img src="https://assets.production.linktr.ee/tabler-icons/outline/building-community.svg"
                        width="20">
                </div>
                <span class="btn-link-label">Corporate Order</span>
                <span class="menu-dot">⋮</span>
            </a>
        </div>
        <div class="socials-section">
            <a class="btn-socialmedia" href="https://www.instagram.com/jamtangan.com" target="_blank"
                aria-label="Instagram">
                <svg fill="currentColor" width="22" height="22" viewBox="0 0 24 24">
                    <path
                        d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C16.9959 5.46501 16.667 5.60129 16.4235 5.84478C16.18 6.08827 16.0437 6.41715 16.0437 6.75988C16.0437 7.10261 16.18 7.43149 16.4235 7.67498C16.667 7.91848 16.9959 8.05476 17.3386 8.05476C17.6813 8.05476 18.0102 7.91848 18.2537 7.67498C18.4972 7.43149 18.6335 7.10261 18.6335 6.75988C18.6335 6.41715 18.4972 6.08827 18.2537 5.84478C18.0102 5.60129 17.6813 5.46501 17.3386 5.46501ZM12 6.86456C10.2496 6.86456 8.57085 7.56118 7.33309 8.79894C6.09533 10.0367 5.39871 11.7154 5.39871 13.4659C5.39871 15.2163 6.09533 16.895 7.33309 18.1328C8.57085 19.3705 10.2496 20.0672 12 20.0672C13.7504 20.0672 15.4292 19.3705 16.6669 18.1328C17.9047 16.895 18.6013 15.2163 18.6013 13.4659C18.6013 11.7154 17.9047 10.0367 16.6669 8.79894C15.4292 7.56118 13.7504 6.86456 12 6.86456ZM12 8.67043C13.2748 8.67043 14.4974 9.17684 15.3984 10.0779C16.2994 10.9789 16.8058 12.2015 16.8058 13.4762C16.8058 14.751 16.2994 15.9736 15.3984 16.8746C14.4974 17.7756 13.2748 18.282 12 18.282C10.7253 18.282 9.50266 17.7756 8.60165 16.8746C7.70063 15.9736 7.19422 14.751 7.19422 13.4762C7.19422 12.2015 7.70063 10.9789 8.60165 10.0779C9.50266 9.17684 10.7253 8.67043 12 8.67043Z">
                    </path>
                </svg>
            </a>

            <a class="btn-socialmedia" href="https://www.tiktok.com/@jamtangan.com" target="_blank" aria-label="TikTok">
                <svg fill="currentColor" width="22" height="22" viewBox="0 0 24 24">
                    <path
                        d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z" />
                </svg>
            </a>

            <a class="btn-socialmedia" href="https://www.youtube.com/@jamtangandotcom" target="_blank"
                aria-label="YouTube">
                <svg fill="currentColor" width="22" height="22" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z" />
                </svg>
            </a>

            <a class="btn-socialmedia" href="https://www.facebook.com/jamtangan.com" target="_blank"
                aria-label="Facebook">
                <svg fill="currentColor" width="22" height="22" viewBox="0 0 24 24">
                    <path
                        d="M23 12C23 5.92487 18.0751 0.999996 12 0.999996C5.92488 0.999996 1 5.92487 1 12C1 17.1588 4.55146 21.4874 9.34266 22.6761V15.3614H7.07438V12H9.34266V10.5516C9.34266 6.80751 11.037 5.07215 14.7128 5.07215C15.4096 5.07215 16.6121 5.20877 17.104 5.34544V8.39261C16.8444 8.36529 16.3935 8.3516 15.8332 8.3516C14.0295 8.3516 13.3326 9.03484 13.3326 10.8112V12H16.9256L16.3084 15.3614H13.3326V22.9194C18.7792 22.2616 23 17.624 23 12Z" />
                </svg>
            </a>

            <a class="btn-socialmedia" href="https://t.me/jamtangandotcom" target="_blank" aria-label="Telegram">
                <svg fill="currentColor" width="22" height="22" viewBox="0 0 24 24">
                    <path
                        d="M23.0039 12.0046C23.0039 18.0797 18.079 23.0046 12.0039 23.0046C5.92877 23.0046 1.00391 18.0797 1.00391 12.0046C1.00391 5.92945 5.92877 1.00458 12.0039 1.00458C18.079 1.00458 23.0039 5.92945 23.0039 12.0046ZM12.3886 9.11945C11.317 9.56824 9.18291 10.4933 5.97725 11.8855C5.46434 12.0961 5.18957 12.2976 5.16209 12.4991C5.12153 12.8399 5.548 12.9722 6.12331 13.1507C6.19754 13.1738 6.27426 13.1976 6.35277 13.2227C6.92063 13.4059 7.67167 13.6165 8.06551 13.6257C8.42271 13.6349 8.81655 13.4883 9.25618 13.1861C12.2512 11.1619 13.7899 10.1361 13.8907 10.1178C13.9639 10.0995 14.0555 10.0812 14.1196 10.1361C14.1837 10.1911 14.1837 10.301 14.1746 10.3284C14.1309 10.5105 12.3441 12.1693 11.531 12.9241C11.3216 13.1186 11.1767 13.253 11.1429 13.2868C11.057 13.3752 10.9696 13.459 10.8855 13.5395C10.3597 14.0427 9.96521 14.4203 10.9048 15.0362C11.332 15.3182 11.6765 15.5532 12.0158 15.7847C12.4258 16.0645 12.8282 16.339 13.3594 16.6848C13.4846 16.767 13.6044 16.8523 13.7213 16.9354C14.1776 17.26 14.5893 17.5529 15.0996 17.5091C15.3927 17.4817 15.695 17.2069 15.8507 16.3826C16.217 14.4409 16.9315 10.2185 17.0963 8.47832C17.1146 8.33178 17.0963 8.13944 17.078 8.04785C17.0597 7.95626 17.0322 7.83719 16.9223 7.7456C16.7849 7.63569 16.5834 7.61737 16.4918 7.61737C16.0797 7.62653 15.4385 7.84635 12.3886 9.11945Z" />
                </svg>
            </a>
        </div>
        <div class="footer">
            Cookie Preferences <span>•</span>
            <a href="https://linktr.ee/s/about/trust-center/report/?field86145911=https%3A%2F%2Flinktr.ee%2Fjamtangan.com"
                target="_blank">Report</a> <span>•</span>
            <a href="https://linktr.ee/privacy" target="_blank">Privacy</a> <span>•</span>
            <a href="https://linktr.ee/s/explore" target="_blank">Explore</a>
        </div>
    </div>
</body>

</html>
