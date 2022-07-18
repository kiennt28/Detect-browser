<?php include('header.php') ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4989876936770363"
    crossorigin="anonymous"></script>
  <!-- Ads Banner 1 -->
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4989876936770363" data-ad-slot="9244797951"
    data-ad-format="auto" data-full-width-responsive="true"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  <!-- <section class="section_main section_user-ip section">
      <div class="location-info container container_main-ip-info">
        <div class="main-ip-info__ip"></div>
        <div class="row">
          <h1>My IP:</h1>
        </div>
      </div>
    </section> -->
  <div class="mt-2 text-center">
    <a href="https://www.justhost.com/track/tuyetmai/" target="_blank"> <img border="0"
        src="https://justhost-cdn.com/media/partner/images/tuyetmai/760x80/jh-ppc-banners-dynamic-760x80.png"> </a>
  </div>
  <div class="section section_ip-check">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card ip-info location-info">
                <h4 class="card__title">Location</h4>
                <div class="card__data">
                  <div class="card__row">
                    <div class="card__col card__col_param">IP:</div>
                    <div class="card__col card__col_value">
                      <span id="ip"><?php echo $api_result['ip'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Type:</div>
                    <div class="card__col card__col_value">
                      <span id="type"><?php echo $api_result['type'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Continent Code:</div>
                    <div class="card__col card__col_value">
                      <span id="continent_code"><?php echo $api_result['continent_code'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Continent Name:</div>
                    <div class="card__col card__col_value">
                      <span id="continent_code"><?php echo $api_result['continent_name'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Country Code:</div>
                    <div class="card__col card__col_value">
                      <span id="country_code"><?php echo $api_result['country_code'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Country Name:</div>
                    <div class="card__col card__col_value">
                      <span id="country_name"><?php echo $api_result['country_name'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Region Code:</div>
                    <div class="card__col card__col_value">
                      <span id="region_code"><?php echo $api_result['region_code'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Region Name:</div>
                    <div class="card__col card__col_value">
                      <span id="region_name"><?php echo $api_result['region_name'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Zip:</div>
                    <div class="card__col card__col_value">
                      <span id="zip"><?php echo $api_result['zip'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">City:</div>
                    <div class="card__col card__col_value">
                      <span id="city"><?php echo $api_result['city'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Capital:</div>
                    <div class="card__col card__col_value">
                      <span id="capital"><?php echo $api_result['location']['capital'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Geoname:</div>
                    <div class="card__col card__col_value">
                      <span id="geoname_id"><?php echo $api_result['location']['geoname_id'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Calling_code:</div>
                    <div class="card__col card__col_value">
                      <span id="calling_code"><?php echo $api_result['location']['calling_code'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Latitude:</div>
                    <div class="card__col card__col_value">
                      <span id="lat"><?php echo $api_result['latitude'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Longitude</div>
                    <div class="card__col card__col_value">
                      <span id="lon"><?php echo $api_result['longitude']?></span>
                    </div>
                  </div>
                  <!-- <div class="card__row">
                    <div class="card__col card__col_param">Address:</div>
                    <div class="card__col card__col_value">
                      <span id="address"></span>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">Browser</h4>
                <div class="card__data">
                  <div class="card__row">
                    <div class="card__col card__col_param">Browser:</div>
                    <div class="card__col card__col_value" id="browser"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">
                      Browser version:
                    </div>
                    <div class="card__col card__col_value" id="vBrowser"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Platform:</div>
                    <div class="card__col card__col_value" id="platform"></div>
                  </div>
                  <!-- <div class="card__row">
                      <div class="card__col card__col_param">Headers:</div>
                      <div class="card__col card__col_value" id="header"></div>
                    </div> -->
                  <div class="card__row">
                    <div class="card__col card__col_param">JavaScript:</div>
                    <div class="card__col card__col_value" id="javaScript"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">Navigator</h4>
                <div class="card__data" id="browser-navigator">
                  <div class="card__row">
                    <div class="card__col card__col_param">VendorSub:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">ProductSub:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Google Inc:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">
                      MaxTouchPoints:
                    </div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">
                      HardwareConcurrency:
                    </div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">DeviceMemory:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">
                      CookieEnabled:
                    </div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AppCodeName:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AppName:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AppVersion:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Platform:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Product:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">UserAgent:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Language:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">OnLine:</div>
                    <div class="card__col card__col_value"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">Language</h4>
                <div class="card__data" id="language"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card screen-info">
                <h4 class="card__title">Screen</h4>
                <div class="card__data" id="screen">
                  <div class="card__row">
                    <div class="card__col card__col_param">ColorDepth:</div>
                    <div class="card__col card__col_value">
                      <span id="colorDepth"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">PixelDepth:</div>
                    <div class="card__col card__col_value">
                      <span id="pixelDepth"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Height:</div>
                    <div class="card__col card__col_value">
                      <span id="height"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Width:</div>
                    <div class="card__col card__col_value">
                      <span id="width"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AvailHeight:</div>
                    <div class="card__col card__col_value">
                      <span id="availHeight"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AvailWidth:</div>
                    <div class="card__col card__col_value">
                      <span id="availWidth"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AvailTop:</div>
                    <div class="card__col card__col_value">
                      <span id="availTop"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">AvailLeft:</div>
                    <div class="card__col card__col_value">
                      <span id="availLeft"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Window size:</div>
                    <div class="card__col card__col_value">
                      <span id="screenSize"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">Plugin</h4>
                <div class="card__data card__data_with-overflow" id="plugins"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">EXTENDED</h4>
                <div class="card__data">
                  <div class="card__row">
                    <div class="card__col card__col_param">WebGL:</div>
                    <div class="card__col card__col_value">
                      <span id="q-js-wgl"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Canvas:</div>
                    <div class="card__col card__col_value">
                      <span id="q-js-canvas"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Audio:</div>
                    <div class="card__col card__col_value">
                      <span id="q-js-audio"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Fonts:</div>
                    <div class="card__col card__col_value">
                      <span id="q-js-fonts"></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Client Rects:</div>
                    <div class="card__col card__col_value">
                      <span id="q-js-rects"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="ip-check__card">
                <h4 class="card__title">Time</h4>
                <div class="card__data">
                  <div class="card__row">
                    <div class="card__col card__col_param">Zone:</div>
                    <div class="card__col card__col_value">
                      <span id="time_zone"><?php echo $api_result['time_zone']['id'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">Local:</div>
                    <div class="card__col card__col_value">
                      <span id="current_time"><?php echo $api_result['time_zone']['current_time'] ?></span>
                    </div>
                  </div>
                  <div class="card__row">
                    <div class="card__col card__col_param">System:</div>
                    <div class="card__col card__col_value">
                      <span id="system-time"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">WebRTC</h4>
                <div class="card__data card__data_webrtc">
                  <div class="enabled-status__wrapper">
                    <span class="enabled-status webrtc-status-icon disabled"></span>
                    <span class="cont"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">JavaScript</h4>
                <div class="card__data" id="javascript-status">
                  <div class="enabled-status__wrapper" id="js-status">
                    <noscript>
                      <span class="enabled-status js-status-icon disabled"></span>
                      <span class="cont js-status">Disabled</span>
                    </noscript>
                    <span class="enabled-status js-status-icon enabled" style="display: none"></span>
                    <span class="cont js-status" style="display: none">Enabled</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">Flash</h4>
                <div class="card__data card__data_webrtc">
                  <div class="enabled-status__wrapper" id="flash-status">
                    <span class="enabled-status java-status-icon disabled"></span>
                    <span class="cont flash-status">Disabled</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">ActiveX</h4>
                <div class="card__data card__data_webrtc">
                  <div class="enabled-status__wrapper" id="activex-status">
                    <span class="enabled-status java-status-icon disabled"></span>
                    <span class="cont activex-status">Disabled</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">Java</h4>
                <div class="card__data card__data_webrtc">
                  <div class="enabled-status__wrapper" id="java-status">
                    <span class="enabled-status java-status-icon disabled"></span>
                    <span class="cont">Disabled</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="ip-check__card">
                <h4 class="card__title">Cookies</h4>
                <div class="card__data card__data_webrtc">
                  <div class="enabled-status__wrapper" id="cookies-status">
                    <span class="enabled-status java-status-icon disabled"></span>
                    <span class="cont">Disabled</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4989876936770363"
    crossorigin="anonymous"></script>
  <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-4989876936770363"
    data-ad-slot="9983164557"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  <script src="assets/js/lib/cryptojs.js"></script>
  <script src="assets/js/webgl.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>