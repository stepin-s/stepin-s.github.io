<?php require $_SERVER['DOCUMENT_ROOT'] . "/config_db.php"; ?>
<?php require "header.php"; ?>

<link href="/dashboard.css" rel="stylesheet">

<style type="text/css">
  /* Chart.js */
  @-webkit-keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  @keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  .chartjs-render-monitor {
    -webkit-animation: chartjs-render-animation 0.001s;
    animation: chartjs-render-animation 0.001s;
  }
</style>
<style>
  :root a[href*="//top.mail.ru/jump?"],
  :root [title="uCoz Counter"],
  :root .min-width-normal>#popup_container~#fade,
  :root .min-width-normal>#popup_container,
  :root body>div[id^="dV"][style^="width"][style*="height"][style*="position"][style*="fixed"][style*="overflow"][style*="z-index"][style*="background"],
  :root a[href*="/ulike.farm"],
  :root .stat_pixel_yes[onclick][class*="_layout_"][class*="_format_"],
  :root .serp-list_left_yes[aria-label="Результаты поиска"]>.t-construct-adapter__adv,
  :root .serp-list+.serp-list>.serp-adv__head~.serp-item,
  :root .i-bem.b-timetable__row[onclick*="awaps"],
  :root .content__right>.z-market_right_yes,
  :root body>#__promo-sticky-button__,
  :root .app.blog-post-page .secondary-header-ad-block,
  :root div[style="width: 252px; height: 450px; position: fixed; right: 0px; top: 0px; overflow: hidden; z-index: 10000;"],
  :root object[data^="blob"],
  :root noindex>.search_result[class*="search_result_"],
  :root img[width="468"][height="60"],
  :root iframe[src*="utraff.com"],
  :root iframe[src*="ads.exosrv.com"],
  :root iframe[src*="/mixadv_"],
  :root iframe[src*="/3647.tech"],
  :root iframe[id^="republer"],
  :root div[id^="zcbclk"],
  :root div[id^="trafmag_"],
  :root div[id^="tizerws_"],
  :root div[id^="smi2adblock_"],
  :root div[id^="sblock_inform_"],
  :root div[id^="rtn4p"],
  :root div[id^="news_nest_net_ru"],
  :root div[id^="news_nest_msk_ru"],
  :root div[id^="news_2xclick_ru_"],
  :root div[id^="join_informer_"],
  :root div[id^="gnezdo_ru_"],
  :root div[id^="b_tz_"],
  :root div[id^="ads_games_"],
  :root div[id^="admixer_"],
  :root div[id^="M"][id*="Composite"],
  :root div[id^="DIV_DA_"],
  :root div[id^="Crt-"][style],
  :root div[id*="Teaser_Block"],
  :root div[class^="da-ya-widget"],
  :root div[class*="relap"][class*="-rec-item"],
  :root a[onclick*="trtkp.ru"],
  :root a[onclick*="offergate-amigo"],
  :root a[onclick*="n284adserv.com"],
  :root a[href^="https://www.juicer.io?referrer="],
  :root a[href^="https://msetup.pro"],
  :root a[href^="https://kshop"][href*=".pro/"],
  :root a[href^="http://trafmaster.com"],
  :root a[href^="http://traderstart.mirtesen.ru"],
  :root a[href^="http://reals-story.ru/"],
  :root a[href^="http://luckiestclick.com/goto."],
  :root a[href^="http://kshop.biz/"],
  :root a[href^="http://datxxx.com"],
  :root a[href^="http://browserload.info/"],
  :root a[href^="http://apytrc.com/click/"],
  :root a[href^="http://amigodistr.ru/"],
  :root a[href="http://advert.mirtesen.ru/"],
  :root a[href*="zdravo-med.ru"],
  :root a[href*="trklp.ru"],
  :root a[href*="traflabs.xyz"],
  :root a[href*="trafgid.xyz"],
  :root div[id^="CGCandy"],
  :root a[href*="tptrk.ru"],
  :root a[href*="torrentum.ru"],
  :root a[href*="top-info24.ru"],
  :root a[href*="shakesclick.com"],
  :root a[href*="shakescash.com"],
  :root a[href*="shakes.pro"],
  :root a[href*="sapmedia.ru"],
  :root a[href*="problogrus.ru"],
  :root a[href^="https://homyanus.com"],
  :root a[href*="please-direct.me"],
  :root a[href*="please-direct.com"],
  :root a[href*="sviruniversal.com/"],
  :root a[href*="octoclick.net"],
  :root a[href*="marketgid.com/"],
  :root a[href*="navaxudoru.com"],
  :root a[href*="lifebloggersz.ru"],
  :root a[href*="https://relap.io/r?"],
  :root a[href*="herrabjec.pro"],
  :root a[href*="goext.info"],
  :root a[href*="gocdn.ru"],
  :root a[href*="go.ad2up.com"],
  :root a[href*="ftpglst.com"],
  :root a[href*="flylinks.pw"],
  :root a[href*="films.ws"],
  :root a[href*="filebase.me"],
  :root a[href*="cpl11.ru"],
  :root a[href*="cpl1.ru"],
  :root a[href*="cpagetti1.com"],
  :root a[href*="cmsmodnews.com"],
  :root a[href*="bubblesmedia.ru/sb/clk/"],
  :root a[href*="blogers-story.ru"],
  :root a[href*="shakesin.com"],
  :root a[href*="bgrndi.com"],
  :root a[href*="beststbuy.ru"],
  :root a[href*="bestforexplmdb.com"],
  :root a[href*="best-zdrav.ru"],
  :root a[href*="best-zdorovye.ru"],
  :root a[href*="beauty-list.ru"],
  :root a[href*="medinforms.ru"],
  :root a[href*="awesomeredirector"],
  :root a[href*="amigo-biz.ru/ads/click"],
  :root a[href*="amgfile.ru"],
  :root a[href*="ads2-adnow.com"],
  :root a[href*="://rendersaveron.com"],
  :root a[href*="tvkw.ru"],
  :root a[href*="://etcodes.com/"],
  :root a[href*="://clickstats.online/"],
  :root a[href*="://chikidiki.ru"],
  :root a[href*="://adv-views.com"],
  :root a[href*="/universalsrc.net/"],
  :root a[href*="/universalsrc.com/"],
  :root a[href^="http://fly-shops.ru"],
  :root a[href*="/universal-lnk.net/"],
  :root a[href*="/uni-lnk.com/"],
  :root a[href*="/uloads.ru/"],
  :root a[href*="/u-loads.ru/"],
  :root a[href*="/u-load.ru/"],
  :root a[href*="/onvix.tv/promo/"][target=_blank],
  :root a[href*="/myuniversalnk.com/"],
  :root a[href*="/mosday.ru/ad/"],
  :root a[href*="/kshop3.biz"],
  :root iframe[src*="marketgid.com"],
  :root a[href*="/getdriverpack.ru"],
  :root a[href*="/get-torrent.ru"],
  :root a[href*="/fastvk.com"],
  :root a[href*="/ber-ter.com"],
  :root iframe[src*="laim.tv/rotator/"],
  :root a[href*="/advertisesimple.info"],
  :root a[href*="//viruniversal.com/"],
  :root a[href*="//universalut.info/"],
  :root a[href*="//universalse.info/"],
  :root a[href*="kodielinktrust.ru"],
  :root a[href*="//universalin.info/"],
  :root a[href*="//ubar.pro"],
  :root a[href*="//ubar-pro.ru"],
  :root a[href*="//ubar-pro"],
  :root a[href*="//reruniversal.com/"],
  :root a[href*="trtkp.ru"],
  :root a[href*="//fofuvipibo.com/"],
  :root a[href*="advertwebgid.ru"],
  :root a[href*="//ext-load.net"],
  :root a[href*="//do-rod.com/"],
  :root a[href*=".twkv.ru"],
  :root a[href*=".pokupkins.ru"],
  :root .app.blog-post-page #blog-post-item-video-ad,
  :root a[href*=".1liveinternet.ru"],
  :root a[href*="katuhus.com"],
  :root a[data-href*="recreativ.ru"],
  :root [onclick*="trklp.ru"],
  :root [onclick*="/sb/clk/"],
  :root [onclick*=".twkv.ru"],
  :root [id^="relap-custom-iframe-rec"],
  :root [href*="pigiuqproxy.com"],
  :root [href*="driftawayforfun.com"],
  :root [href*="/zfvklk.ru"],
  :root [href*="/vaigowoa.com"],
  :root [data-link*="/sb/clk/"],
  :root .header-banner>#moneyback[target="_blank"],
  :root .base-page_left-side>#left_ban,
  :root .base-page_center>.banerTop,
  :root #adv_unisound~#main>#slidercontentContainer,
  :root #PopWin[onmousemove],
  :root #MT_overroll~div[class][style="left:0px;top:0px;height:480px;width:650px;"],
  :root topadblock,
  :root input[onclick^="window.open('http://www.FriendlyDuck.com/"],
  :root img[alt^="Fuckbook"],
  :root iframe[src^="http://static.mozo.com.au/strips/"],
  :root iframe[src^="http://cdn2.adexprt.com/"],
  :root iframe[id^="google_ads_iframe"],
  :root a[href*="rexchange.begun.ru/rclick?"],
  :root header#hdr+#main>div[data-hveid],
  :root div[id^="zergnet-widget"],
  :root div[id^="traffective-ad-"],
  :root div[id^="sticky_ad_"],
  :root div[id^="q1-adset-"],
  :root div[id^="proadszone-"],
  :root div[id^="mainads"],
  :root a[href*="land-gooods.ru"],
  :root div[id^="lazyad-"],
  :root div[id^="google_dfp_"],
  :root div[id^="google_ads_iframe_"],
  :root div[id^="drudge-column-ads-"],
  :root div[id^="dmRosAdWrapper"],
  :root div[id^="div-gpt-ad"],
  :root div[id^="div-adtech-ad-"],
  :root a[href*="lifenews24x7.ru"],
  :root .base-page_container>.banerRight,
  :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"],
  :root a[href^="http://www1.clickdownloader.com/"],
  :root div[id^="cns_ads_"],
  :root #\5f _admvnlb_modal_container,
  :root div[id^="adspot-"],
  :root a[href^="http://olivka.biz/"],
  :root input[onclick^="window.open('http://www.friendlyduck.com/"],
  :root div[id^="ads300_250-widget"],
  :root div[id^="ads250_250-widget"],
  :root a[href*="trk-1.com"],
  :root div[id^="adrotate_widgets-"],
  :root div[id^="adfox_"],
  :root div[id^="ad_script_"],
  :root div[id^="ad_rect_"],
  :root #content>#right>.dose>.dosesingle,
  :root div[id^="ad_bigbox_"],
  :root div[id^="ad-server-"],
  :root div[id^="acm-ad-tag-"],
  :root div[id^="ADV-SLOT-"],
  :root div[data-native_ad],
  :root a[href^=" http://n47adshostnet.com/"],
  :root div[data-id^="CarouselPLA-"]>.kzwEHf,
  :root div[class^="proadszone-"],
  :root div[class^="pane-google-admanager-"],
  :root a[href^="http://adultgames.xxx/"],
  :root a[href^="http://semi-cod.com/clicks/"],
  :root div[class^="index_displayAd_"],
  :root a[href^="http://www.affbuzzads.com/affiliate/"],
  :root div[class^="index_adBeforeContent_"],
  :root a[href*="tvroff.net"],
  :root div[class^="index_adAfterContent_"],
  :root iframe[src^="http://cdn1.adexprt.com/"],
  :root a[href^="http://dwn.pushtraffic.net/"],
  :root div[class^="hp-ad-rect-"],
  :root div[class^="block-openx-"],
  :root a[href*="linkmyc.com"],
  :root div[class^="ads-partner-"],
  :root div[class^="ad_position_"],
  :root img[width="728"][height="90"],
  :root div[class^="ad_border_"],
  :root a[href^="http://adprovider.adlure.net/"],
  :root div[class^="Ad__container"],
  :root div[class*="_AdInArticle_"],
  :root div>[class][onclick*=".updateAnalyticsEvents"],
  :root a[href^="http://internalredirect.site/"],
  :root bottomadblock,
  :root a[href^="http://c.actiondesk.com/"],
  :root aside[id^="div-gpt-ad"],
  :root div[id^="ad-cid-"],
  :root a[href^="http://lp.ezdownloadpro.info/"],
  :root a[href^="http://uploaded.net/ref/"],
  :root aside[id^="advads_ad_widget-"],
  :root aside[id^="adrotate_widgets-"],
  :root a[href*="shakespoint.com"],
  :root a[target="_blank"][href^="http://api.taboola.com/"],
  :root a[style="display:block;width:300px;min-height:250px"][href^="http://li.cnet.com/click?"],
  :root div[id^="div-ads-"],
  :root a[href^="http://at.atwola.com/"],
  :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"]+.ob_source,
  :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"]+.ob_source,
  :root a[href*=".orgsales.ru"],
  :root a[href^="http://popup.taboola.com/"],
  :root a[href^="//adbit.co/?a=Advertise&"],
  :root a[onmousedown^="this.href='/wp-content/embed-ad-content/"],
  :root div[class^="AdhesionAd_"],
  :root div[class^="Ad__bigBox"],
  :root div[role="navigation"]+c-wiz>script+div>.kxhcC,
  :root a[onclick*="//m.economictimes.com/etmack/click.htm"],
  :root a[href*="offhealth.ru"],
  :root a[href^="https://www.what-sexdating.com/"],
  :root a[href^="https://www.travelzoo.com/oascampaignclick/"],
  :root a…
</style>


<body>

  <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
  <script async="" src="https://www.google-analytics.com/analytics.js" style="display: none !important;"></script>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(d, w, c) {
      (w[c] = w[c] || []).push(function() {
        try {
          w.yaCounter39705265 = new Ya.Metrika({
            id: 39705265,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
          });
        } catch (e) {}
      });
      var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function() {
          n.parentNode.insertBefore(s, n);
        };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";
      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else {
        f();
      }
    })(document, window, "yandex_metrika_callbacks");
  </script> <noscript>
    <div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div>
  </noscript> <!-- /Yandex.Metrika counter -->

  <!-- <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav> -->

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                  <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                </svg>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
                Integrations
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
              </svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
          </div>
          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"><?php echo "Hello" . "  " . $_SESSION['email']; ?></h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              This week
            </button>
          </div>
        </div>
        <div> <p>Some search history:</p>
          <?php
          $stmt = $pdo->prepare('SELECT search_history FROM users WHERE  email = ?');
          $stmt->bindParam(1, $_SESSION['email'], PDO::PARAM_STR, 12);
          $stmt->execute();
          $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
          foreach ($array as $row){
            echo "<a href=\"request.php?search={$row['search_history']}\">";
          }
          
          ?>
        </div>



        /* <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2970" height="1254" style="display: block; width: 1485px; height: 627px;">
          <div> </div>
        </canvas> */
      </main>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="dashboard.js"></script>


</body>


<?php require "footer.php" ?>