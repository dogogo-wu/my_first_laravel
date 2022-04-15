<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft-web</title>
    <link rel="stylesheet" href="{{asset('css/msweb.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <header>
        <a class="logo-anchor" href=""><div class="logo"></div></a>
        <nav>
            <div class="menu-left">
                <ul>
                    <a><li>Microsoft 365</li></a>
                    <a><li>Office</li></a>
                    <a><li>Windows</li></a>
                    <a><li>Surface</li></a>
                    <a><li>Xbox</li></a>
                    <a><li>支援</li></a>
                </ul>
            </div>
            <div class="menu-right">
                <ul>
                    <a class="toggle-btn" tabindex="0"><li>所有Microsoft <i class="fa-solid fa-chevron-down"></i></li></a>
                    <input class="burger-input" type="checkbox" id="id-cb">
                    <label for="id-cb">
                        <a class="burger-anchor" tabindex="0"><li></li></a>
                    </label>
                    <div class="burger-menu" tabindex="0">
                        <ul>
                            <li><a>Microsoft 365</a></li>
                            <li><a>Office</a></li>
                            <li><a>Windows</a></li>
                            <li><a>Surface</a></li>
                            <li><a>Xbox</a></li>
                            <li><a>支援</a></li>
                            <li class="sub-burger">
                                <a tabindex="0">軟體<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>Windows 應用程式</a></li>
                                    <li><a>One Drive</a></li>
                                    <li><a>Outlook</a></li>
                                    <li><a>Skype</a></li>
                                    <li><a>OneNote</a></li>
                                    <li><a>Microsoft Teams</a></li>
                                </ul>
                            </li>
                            <li class="sub-burger">
                                <a tabindex="0">個人電腦和設備<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>選購 Xbox</a></li>
                                    <li><a>電腦配件</a></li>
                                </ul>
                            </li>
                            <li class="sub-burger">
                                <a tabindex="0">娛樂<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>Xbox Game Pass Ultimate</a></li>
                                    <li><a>Xbox Live Gold</a></li>
                                    <li><a>Xbox 與遊戲</a></li>
                                    <li><a>電腦遊戲</a></li>
                                    <li><a>Windows 遊戲</a></li>
                                </ul>
                            </li>
                            <li class="sub-burger">
                                <a tabindex="0">商務適用<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>Microsoft Cloud</a></li>
                                    <li><a>Microsoft Azure</a></li>
                                    <li><a>Microsoft Dynamics 365</a></li>
                                    <li><a>Microsoft 365</a></li>
                                    <li><a>Windows 365</a></li>
                                    <li><a>Microsoft Industry</a></li>
                                    <li><a>選購商務版</a></li>
                                </ul>
                            </li>
                            <li class="sub-burger">
                                <a tabindex="0">Developer & IT<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>.NET</a></li>
                                    <li><a>Visual Studio</a></li>
                                    <li><a>Windows Server</a></li>
                                    <li><a>開發 Windows 應用程式</a></li>
                                    <li><a>文件</a></li>
                                    <li><a>Power Platform</a></li>
                                    <li><a>Power Apps</a></li>
                                </ul>
                            </li>
                            <li class="sub-burger">
                                <a tabindex="0">其他<i class="fa-solid fa-chevron-down"></i><i class="fa-solid fa-chevron-up"></i></a>
                                <ul>
                                    <li><a>Microsoft Rewards</a></li>
                                    <li><a>免費下載與安全性</a></li>
                                    <li><a>教育</a></li>
                                    <li><a>禮品卡</a></li>
                                    <li><a>Licensing</a></li>
                                </ul>
                            </li>

                            <li><a>檢視網站地圖</a></li>
                        </ul>
                    </div>
                    <a class="search-anchor"><li><span class="c-1398-menu">搜尋 </span><img class="nav-icon-other" src="img/icon-search.PNG" alt=""></li></a>
                    <span class="push-icon"></span>
                    <a class="cart-anchor"><li><span class="c-1398-menu">購物車 </span><img class="nav-icon-other" src="img/icon-cart.PNG" alt=""></li></a>
                    <a class="li-login c-1398-menu" href="/"><li>登入 </li></a>
                    <a class="a-login" href=""><li class="li-login-img"><img class="icon-login" src="img/icon-login.jpg" alt=""></li></a>
                    <div class="menu-list" tabindex="0">
                        <div class="menu-list-top">
                            <div>
                                <h4>軟體</h4>
                                <ul>
                                    <li>Windows 應用程式</li>
                                    <li>One Drive</li>
                                    <li>Outlook</li>
                                    <li>Skype</li>
                                    <li>OneNote</li>
                                    <li>Microsoft Teams</li>
                                </ul>
                            </div>
                            <div>
                                <h4>個人電腦和設備</h4>
                                <ul>
                                    <li>選購 Xbox</li>
                                    <li>電腦配件</li>
                                </ul>
                            </div>
                            <div>
                                <h4>娛樂</h4>
                                <ul>
                                    <li>Xbox Game Pass Ultimate</li>
                                    <li>Xbox Live Gold</li>
                                    <li>Xbox 與遊戲</li>
                                    <li>電腦遊戲</li>
                                    <li>Windows 遊戲</li>
                                </ul>
                            </div>
                            <div>
                                <h4>商務適用</h4>
                                <ul>
                                    <li>Microsoft Cloud</li>
                                    <li>Microsoft Azure</li>
                                    <li>Microsoft Dynamics 365</li>
                                    <li>Microsoft 365</li>
                                    <li>Windows 365</li>
                                    <li>Microsoft Industry</li>
                                    <li>選購商務版</li>
                                </ul>
                            </div>
                            <div>
                                <h4>Developer & IT</h4>
                                <ul>
                                    <li>.NET</li>
                                    <li>Visual Studio</li>
                                    <li>Windows Server</li>
                                    <li>開發 Windows 應用程式</li>
                                    <li>文件</li>
                                    <li>Power Platform</li>
                                    <li>Power Apps</li>
                                </ul>
                            </div>
                            <div>
                                <h4>其他</h4>
                                <ul>
                                    <li>Microsoft Rewards</li>
                                    <li>免費下載與安全性</li>
                                    <li>教育</li>
                                    <li>禮品卡</li>
                                    <li>Licensing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-list-bottom">
                            <h4>檢視網站地圖<i class="fa-solid fa-chevron-right"></i></h4>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="sec1">
            <picture>
                <source media="(max-width: 766px)" srcset="img/bg1-0-c2.jpeg">
                <source media="(max-width: 1082px)" srcset="img/bg1-0-c1.jpeg">
                <img src="img/bg1-0.jpeg" alt="bg1">
            </picture>
            <div class="tittle">
                <p>新上市</p>
                <h1>專為今天和明天的生活而設計</h1>
                <p>新一代遊戲、 您的目標、 親朋好友。 Windows 11 是為了讓您更貼近所喜愛的一切。</p>
                <div>
                    <span>查看您的電腦是否準備就緒</span><i class="fa-solid fa-chevron-right"> </i>
                </div>
            </div>
        </section>
        <section class="sec2">
            <a>
                <div class="mid-box">
                    <img src="img/icon-microsoft.png" alt="">
                    <div>選擇您的 Microsoft 365</div>
                </div>
            </a>
            <a>
                <div class="mid-box">
                    <img src="img/icon-tablet.png" alt="">
                    <div>選購 Surface 裝置</div>
                </div>
            </a>
            <a>
                <div class="mid-box">
                    <img src="img/icon-microsoft.png" alt="">
                    <div>取得 Windows 11</div>
                </div>
            </a>
        </section>
        <section class="sec3">
            <div class="bottom-box">
                <img src="img/img-365.png" alt="">
                <h3>Microsoft 365</h3>
                <p>進階版 Office 應用程式、額外的雲端儲存空間、進階安全性等功能，全都在一個方便的訂閱中。</p>
                <div>
                    <a><span>最多可供 6 人使用</span>  <i class="fa-solid fa-chevron-right"></i></a>
                    <a><span>適合 1 人使用</span>  <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="bottom-box">
                <img src="img/img-laptop.jpeg" alt="">
                <h3>Surface Laptop Go</h3>
                <p>運用時尚和效能兼具、最輕巧的 Surface 筆記型電腦，善加利用每一天。</p>
                <a><span>立即選購</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="bottom-box">
                <img src="img/img-surface.jpeg" alt="">
                <strong>查看更新的內容</strong>
                <h3 id="under-strong">Surface Pro X</h3>
                <p>隨時隨地以任何角度不間斷工作，而且配備了可拆式鍵盤與內建的 Slim Pen 存放空間和充電功能。 現在搭載 Windows 11。</p>
                <a><span>立即選購</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="bottom-box">
                <img src="img/img-xbox.jpeg" alt="">
                <h3>Xbox Game Pass Ultimate</h3>
                <p>首月會員資格只要 NT$30。 在您擁有的裝置上遊玩。 包含 EA Play。 此優惠僅適用於新訂閱者。</p>
                <a><span>立即加入</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
        <section class="sec4">
            <picture>
                <source media="(max-width: 766px)" srcset="img/bg2-c2.jpeg">
                <source media="(max-width: 1082px)" srcset="img/bg2-c1.jpeg">
                <img src="img/bg2.jpeg" alt="bg2">
            </picture>
            <div class="tittle txtbox-2">
                <h2>Microsoft OneDrive</h2>
                <p>將檔案和相片儲存到 OneDrive，即可隨時隨地從任何裝置存取</p>
                <div>
                    <span>深入了解</span><i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </section>
        <section class="sec5">
            <h2>適用於商務</h2>
        </section>
        <section class="sec3 sec6">
            <div class="bottom-box">
                <img src="img/img-b1.jpeg" alt="">
                <h3>適用於商務的 Surface</h3>
                <p>無論從事哪種工作，都有一款有助於成功的 Surface。</p>
                <a><span>立即選購</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="bottom-box">
                <img src="img/img-b2.jpeg" alt="">
                <h3>免費取得 Microsoft Teams</h3>
                <p>線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
                <a><span>免費註冊</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="bottom-box">
                <img src="img/img-b3.jpeg" alt="">
                <h3>在混合式環境中蓬勃發展</h3>
                <p>探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。</p>
                <a><span>深入了解</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="bottom-box">
                <img src="img/img-b4.jpeg" alt="">
                <h3>商務用 Windows 11 登場</h3>
                <p>專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。</p>
                <a><span>深入了解</span>  <i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
        <section class="sec7">
            <span>關注 Microsoft</span>
            <a><img src="img/icon-fb.jpg" alt=""></a>
            <a><img src="img/icon-yt.jpg" alt=""></a>
        </section>
    </main>
    <footer>
        <div class="foot1">
            <div>
                <h4>最新動向</h4>
                <ul>
                    <li><a>Microsoft 365</a></li>
                    <li><a>Surface Go</a></li>
                    <li><a>Surface Book 2</a></li>
                    <li><a>Surface Pro</a></li>
                    <li><a>Windows 11 應用程式</a></li>
                </ul>
            </div>
            <div>
                <h4>Microsoft Store</h4>
                <ul>
                    <li><a>帳戶設定檔</a></li>
                    <li><a>下載中心</a></li>
                    <li><a>Microsoft Store 支援</a></li>
                    <li><a>退貨/退款</a></li>
                    <li><a>訂單追蹤</a></li>
                </ul>
            </div>
            <div>
                <h4>教育</h4>
                <ul>
                    <li><a>Microsoft 在教育領域的應用</a></li>
                    <li><a>學生適用的 Office</a></li>
                    <li><a>學校適用的 Office 365</a></li>
                    <li><a>Microsoft Azure 在教育領域的應用</a></li>
                </ul>
            </div>
            <div>
                <h4>企業</h4>
                <ul>
                    <li><a>Azure</a></li>
                    <li><a>AppSource</a></li>
                    <li><a>汽車</a></li>
                    <li><a>政府機構</a></li>
                    <li><a>醫療保健</a></li>
                    <li><a>製造</a></li>
                    <li><a>金融服務</a></li>
                    <li><a>零售</a></li>
                </ul>
            </div>
            <div>
                <h4>開發人員</h4>
                <ul>
                    <li><a>Microsoft Visual Studio</a></li>
                    <li><a>Windows 開發人員中心</a></li>
                    <li><a>開發人員中心</a></li>
                    <li><a>Microsoft 開發人員計畫</a></li>
                    <li><a>Channel 9</a></li>
                    <li><a>Microsoft 365 開發人員中心</a></li>
                    <li><a>Microsoft 365 開發人員計畫</a></li>
                </ul>
            </div>
            <div>
                <h4>公司</h4>
                <ul>
                    <li><a>人才招募</a></li>
                    <li><a>公司新聞</a></li>
                    <li><a>Microsoft 隱私權</a></li>
                    <li><a>投資者</a></li>
                    <li><a>安全性</a></li>
                </ul>
            </div>
        </div>
        <div class="foot2">
            <div class="foot2-left">
                <a>
                    <i class="fa-solid fa-earth-americas"></i>
                    <span>中文(台灣)</span>
                </a>
            </div>
            <div class="foot2-right">
                <ul>
                    <li><a>連絡 Microsoft</a></li>
                    <li><a>隱私權</a></li>
                    <li><a>使用規定</a></li>
                    <li><a>商標</a></li>
                    <li><a>有關我們的廣告訊息</a></li>
                    <li>© Microsoft 2022</li>
                </ul>

            </div>
        </div>
    </footer>
</body>
</html>
