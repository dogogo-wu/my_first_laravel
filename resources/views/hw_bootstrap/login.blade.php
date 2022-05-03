<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <style>
        #login-all .in-txt {
            color: white;
        }

        #remember_me {
            height: 12px;
            width: 12px;
        }

    </style>
</head>

<body>
    <main>
        <section id="login-all">
            <div class="container-fluid my-login-con vh-100 w-100 position-relative">
                <div class="row">
                    <div class="col-lg-6 my-login-L vh-100 h-100 d-none d-lg-flex align-items-center flex-wrap p-0">
                        <div class="my-txt">
                            <p class="display-5 fw-bold">Keep it special</p>
                            <p class="h3">Capture your personal memory in unique way, anywhere.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 my-login-R vh-100 d-flex flex-column align-items-center justify-content-center">
                        <div>
                        </div>
                        <div class="logo-login">
                            <svg class="w-auto h-12 sm:h-16 inline-flex" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 115.8 31.77">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fff;
                                        }

                                    </style>
                                </defs>
                                <title>資產 2</title>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <g id="圖層_1-2-2" data-name="圖層 1-2">
                                            <path class="cls-1"
                                                d="M13.31,0l8.63,5a9.6,9.6,0,0,1,4.79,8.28v8.23L16.3,15.43V13.7l8.92,5.16V14.08a9.52,9.52,0,0,0-4.78-8.29L14.86,2.54V31.77L0,23.17V7.69L7.13,11.8a9.57,9.57,0,0,1,4.78,8.29v5.76L10.42,25V21a9.58,9.58,0,0,0-4.84-8.29L1.44,10.24v12l11.87,6.91Z">
                                            </path>
                                        </g>
                                        <path class="cls-1"
                                            d="M47.18,20.38H44.7a13.73,13.73,0,0,1-1.29,1.68c1.09.44,2,.85,2.83,1.25l-1,1.3c-1.36-.63-2.42-1.08-3.17-1.36A17.44,17.44,0,0,1,37,25l-.72-1.53A14.5,14.5,0,0,0,40,22.51a20.12,20.12,0,0,0-2.63-.8c.64-.7,1-1.14,1.18-1.33H36.39V19h3.23l.76-1.17h-3.1V14.44h3.57v-1H37.23V11.25h-.92V10h.92V7.75h3.62V7h1.7v.79h3.58V10h1v1.3h-1v2.23H42.55v1h3.62v3.38H42.43L41.69,19h1.86a5.27,5.27,0,0,0,.33-.7l1.58.37a.68.68,0,0,1-.11.33h1.83ZM40.85,10V9h-2V10Zm0,2.28v-1h-2v1Zm0,4.28v-.8H38.93v.8Zm1.86,3.87h-2a7.54,7.54,0,0,1-.48.61l1.58.48A7.62,7.62,0,0,0,42.71,20.38ZM44.47,10V9H42.55V10Zm0,2.26v-1H42.55v1Zm.07,4.3v-.8h-2v.8Zm9.86,6.94L53.51,25a12,12,0,0,1-3-3,15,15,0,0,1-2.81,3L46.5,23.58a13,13,0,0,0,3-3.24,15.18,15.18,0,0,1-1.53-4.1l1.57-.86a15.85,15.85,0,0,0,.86,2.85,26.74,26.74,0,0,0,.88-6.7H49.74a20.91,20.91,0,0,1-1.91,4.34L46.65,14.4A24.22,24.22,0,0,0,49,6.81l1.74.25c-.09.58-.27,1.51-.55,2.78h3.9v1.69H53a26.34,26.34,0,0,1-1.55,8.79A11.62,11.62,0,0,0,54.4,23.45Z">
                                        </path>
                                        <path class="cls-1"
                                            d="M62.51,7.28a27.28,27.28,0,0,1-1,2.62l-.71,1.49V24.81H58.92V14.52a17.4,17.4,0,0,1-1.49,1.83l-.82-1.93a24.25,24.25,0,0,0,4.07-7.59Zm12.13,17H61.42V22.47H64.8A95.5,95.5,0,0,0,63.29,13l1.27-.86H61.91V10.31h5.34a24,24,0,0,0-1.12-3.07l1.81-.43a28.73,28.73,0,0,1,1.19,3.5h5v1.82h-2.7l1.47.9c-.35,3.11-.86,6.26-1.51,9.44h3.25Zm-3.5-12.13H65q.86,3.73,1.68,10.34H69.5A89,89,0,0,0,71.14,12.13Z">
                                        </path>
                                        <path class="cls-1"
                                            d="M95,11.64H84.32c0,1.2-.12,2.2-.21,3h8.8q-.16,3.68-.42,6a9.78,9.78,0,0,1-.58,2.93,2.16,2.16,0,0,1-1,.88,5.85,5.85,0,0,1-2.29.31q-1.08,0-2.31-.09l-.48-1.77q1.56.12,2.73.12a2.76,2.76,0,0,0,1.49-.25,3.55,3.55,0,0,0,.5-1.71c.14-1,.27-2.54.38-4.71H84q-.66,5.15-5.83,8.53L77,23.37a12.91,12.91,0,0,0,3.09-2.59,7.7,7.7,0,0,0,1.8-3.55,31.8,31.8,0,0,0,.5-5.59H77.28V9.88h8.06a19,19,0,0,0-1.51-2.49l1.94-.58a31.74,31.74,0,0,1,1.66,3.07H95Z">
                                        </path>
                                        <path class="cls-1"
                                            d="M103.93,20.52c-1.71.9-3.67,1.81-5.9,2.75l-.35-1.82c.35-.13,1.07-.43,2.15-.89V13.87H97.91V12.13h1.92V6.93h1.76v5.2h2v1.74h-2v5.81c.53-.22,1.28-.58,2.26-1.08Zm11.87,1.87a4,4,0,0,1-.57,1.6,1.43,1.43,0,0,1-.81.54,11.26,11.26,0,0,1-2.08.11,6.1,6.1,0,0,1-2.93-.4,1.78,1.78,0,0,1-.51-1.46V17.27h-1.17a9.79,9.79,0,0,1-1,4.54A8.08,8.08,0,0,1,103.13,25l-1.21-1.47A8,8,0,0,0,105,21.2a6.11,6.11,0,0,0,.94-3.93H104.3V8.74h2.75a9.1,9.1,0,0,0,1-2l1.86.39a10.06,10.06,0,0,1-.84,1.6h5.51v8.53h-4v5.42c0,.19.12.29.36.29h2.4c.41,0,.64-.43.7-1.27Zm-7.29-10.32V10.38h-2.46v1.69Zm0,3.6V13.72h-2.46v1.95Zm4.28-3.6V10.38h-2.48v1.69Zm0,3.6V13.72h-2.46v1.95Zm2.8,5.35-1,.57a2.7,2.7,0,0,0-.23-.53,17.78,17.78,0,0,1-2.93.84l-.49-1.07A8.37,8.37,0,0,0,112,17.64l1.33.24a11.49,11.49,0,0,1-.86,2.48,8.1,8.1,0,0,0,1.33-.39,4.47,4.47,0,0,0-.39-.7l1-.61A12.44,12.44,0,0,1,115.59,21Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="cir-icon-group d-flex pt-4 mb-3">
                            <div
                                class="cir-outline rounded-circle border border-2 d-flex align-items-center justify-content-center m-2">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div
                                class="cir-outline rounded-circle border border-2 d-flex align-items-center justify-content-center m-2">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </div>
                            <div
                                class="cir-outline rounded-circle border border-2 d-flex align-items-center justify-content-center m-2">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>
                        </div>
                        <form class="w-100" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-area d-flex align-items-center flex-column mx-auto">
                                <p class="text-center">or use email your account</p>
                                <input type="text" name="email" class="form-control mb-3 in-txt" id="staticEmail"
                                    value="" placeholder="Email">
                                <input type="password" name="password" class="form-control mb-3 in-txt"
                                    id="inputPassword" placeholder="Password">

                                <div class="d-flex w-100 me-auto align-items-center">
                                    <input id="remember_me" type="checkbox" class="me-2" name="remember">
                                    <label for="remember_me" class="txt-small">Remember me</label>
                                </div>
                                <br>
                                <div class="d-flex w-100 justify-content-between">
                                    <a class="link-style">Forgot your password?</a>
                                    <a href="/register" class="link-style">新用戶？點此註冊</a>
                                </div>


                                <div class=" w-100 p-3 pb-2 mb-5 mb-lg-0">
                                    <button type="submit"
                                        class="btn btn-primary my-btn w-100 rounded-pill my-sign-btn">SIGN
                                        IN</button>
                                </div>
                            </div>
                        </form>

                        <div class="d-flex justify-content-center foot-icon fs-4">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
