<?php include('header.php') ?>
<div class="section section_ip-check">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="ip-check__card ip-info location-info">
              <h4 class="card__title">Address Information</h4>
              <div class="card__data">
                <div class="card__row">
                  <div class="card__col card__col_param">Category:</div>
                  <div class="card__col card__col_value">
                    <span id="_category">
                      <?php if (isset($address_result['results'][0]['components']['_category'])) {
                        echo $address_result['results'][0]['components']['_category'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Type:</div>
                  <div class="card__col card__col_value">
                    <span id="_type">
                      <?php if (isset($address_result['results'][0]['components']['_type'])) {
                        echo $address_result['results'][0]['components']['_type'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">City:</div>
                  <div class="card__col card__col_value">
                    <span id="city">
                      <?php if (isset($address_result['results'][0]['components']['city'])) {
                        echo $address_result['results'][0]['components']['city'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Commercial:</div>
                  <div class="card__col card__col_value">
                    <span id="commercial">
                      <?php if (isset($address_result['results'][0]['components']['commercial'])) {
                        echo $address_result['results'][0]['components']['commercial'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Continent:</div>
                  <div class="card__col card__col_value">
                    <span id="continent">
                      <?php if (isset($address_result['results'][0]['components']['continent'])) {
                        echo $address_result['results'][0]['components']['continent'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Country:</div>
                  <div class="card__col card__col_value">
                    <span id="country">
                      <?php if (isset($address_result['results'][0]['components']['country'])) {
                        echo $address_result['results'][0]['components']['country'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Country Code:</div>
                  <div class="card__col card__col_value">
                    <span id="country_code">
                      <?php if (isset($address_result['results'][0]['components']['country_code'])) {
                        echo $address_result['results'][0]['components']['country_code'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">County:</div>
                  <div class="card__col card__col_value">
                    <span id="county">
                      <?php if (isset($address_result['results'][0]['components']['county'])) {
                        echo $address_result['results'][0]['components']['county'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">House Number:</div>
                  <div class="card__col card__col_value">
                    <span id="house_number">
                      <?php if (isset($address_result['results'][0]['components']['house_number'])) {
                        echo $address_result['results'][0]['components']['house_number'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Postcode:</div>
                  <div class="card__col card__col_value">
                    <span id="post_code">
                      <?php if (isset($address_result['results'][0]['components']['postcode'])) {
                        echo $address_result['results'][0]['components']['postcode'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Road:</div>
                  <div class="card__col card__col_value">
                    <span id="road">
                      <?php if (isset($address_result['results'][0]['components']['road'])) {
                        echo $address_result['results'][0]['components']['road'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Suburb:</div>
                  <div class="card__col card__col_value">
                    <span id="suburb">
                      <?php if (isset($address_result['results'][0]['components']['suburb'])) {
                        echo $address_result['results'][0]['components']['suburb'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Confidence:</div>
                  <div class="card__col card__col_value">
                    <span id="confidence">
                      <?php if (isset($address_result['results'][0]['confidence'])) {
                        echo $address_result['results'][0]['confidence'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Formatted:</div>
                  <div class="card__col card__col_value">
                    <span id="formatted">
                      <?php if (isset($address_result['results'][0]['formatted'])) {
                        echo $address_result['results'][0]['formatted'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="ip-check__card">
              <h4 class="card__title">Geometry</h4>
              <div class="card__data">
                <div class="card__row">
                  <div class="card__col card__col_param">Latitude:</div>
                  <div class="card__col card__col_value">
                    <span id="lat">
                      <?php if (isset($address_result['results'][0]['geometry']['lat'])) {
                        echo $address_result['results'][0]['geometry']['lat'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Longitude:</div>
                  <div class="card__col card__col_value">
                    <span id="longitude">
                      <?php if (isset($address_result['results'][0]['geometry']['lng'])) {
                        echo $address_result['results'][0]['geometry']['lng'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ip-check__card">
              <h4 class="card__title">Northeast</h4>
              <div class="card__data">
                <div class="card__row">
                  <div class="card__col card__col_param">Latitude:</div>
                  <div class="card__col card__col_value">
                    <span id="lat">
                      <?php if (isset($address_result['results'][0]['bounds']['northeast']['lat'])) {
                        echo $address_result['results'][0]['bounds']['northeast']['lat'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Longitude:</div>
                  <div class="card__col card__col_value">
                    <span id="longitude">
                      <?php if (isset($address_result['results'][0]['bounds']['northeast']['lng'])) {
                        echo $address_result['results'][0]['bounds']['northeast']['lng'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ip-check__card">
              <h4 class="card__title">Southwest</h4>
              <div class="card__data">
                <div class="card__row">
                  <div class="card__col card__col_param">Latitude:</div>
                  <div class="card__col card__col_value">
                    <span id="lat">
                      <?php if (isset($address_result['results'][0]['bounds']['southwest']['lat'])) {
                        echo $address_result['results'][0]['bounds']['southwest']['lat'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Longitude:</div>
                  <div class="card__col card__col_value">
                    <span id="longitude">
                      <?php if (isset($address_result['results'][0]['bounds']['southwest']['lng'])) {
                        echo $address_result['results'][0]['bounds']['southwest']['lng'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ip-check__card">
              <h4 class="card__title">Timestamp</h4>
              <div class="card__data">
                <div class="card__row">
                  <div class="card__col card__col_param">Created http:</div>
                  <div class="card__col card__col_value">
                    <span id="created_http">
                      <?php if (isset($address_result['timestamp']['created_http'])) {
                        echo $address_result['timestamp']['created_http'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
                <div class="card__row">
                  <div class="card__col card__col_param">Created Unix:</div>
                  <div class="card__col card__col_value">
                    <span id="created_unix">
                      <?php if (isset($address_result['timestamp']['created_unix'])) {
                        echo $address_result['timestamp']['created_unix'];
                      } else {
                        echo "NULL";
                      } ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>