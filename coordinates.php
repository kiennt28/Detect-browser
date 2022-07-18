<?php include('header.php') ?>
<div class="section section_ip-check">
    <div class="container">
        <div class="row">
            <?php for ($data = 0; $data < count($results['data']); $data++) {
            ?>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ip-check__card ip-info location-info">
                                <h4 class="card__title">Address Information</h4>
                                <div class="card__data">
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Name:</div>
                                        <div class="card__col card__col_value">
                                            <span id="name">
                                                <?php if (isset($results['data'][$data]['name'])) {
                                                    echo $results['data'][$data]['name'];
                                                } else {
                                                    echo "NULL";
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Postal code:</div>
                                        <div class="card__col card__col_value">
                                            <span id="postal_code">
                                                <?php if (isset($results['data'][$data]['postal_code'])) {
                                                    echo $results['data'][$data]['postal_code'];
                                                } else {
                                                    echo "NULL";
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Region:</div>
                                        <div class="card__col card__col_value">
                                            <span id="region">
                                                <?php if (isset($results['data'][$data]['region'])) {
                                                    echo $results['data'][$data]['region'];
                                                } else {
                                                    echo "NULL";
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Locality:</div>
                                        <div class="card__col card__col_value">
                                            <span id="locality">
                                                <?php if (isset($results['data'][$data]['locality'])) {
                                                    echo $results['data'][$data]['locality'];
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
                                                <?php if (isset($results['data'][$data]['country'])) {
                                                    echo $results['data'][$data]['country'];
                                                } else {
                                                    echo "NULL";
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Label:</div>
                                        <div class="card__col card__col_value">
                                            <span id="label">
                                                <?php if (isset($results['data'][$data]['label'])) {
                                                    echo $results['data'][$data]['label'];
                                                } else {
                                                    echo "NULL";
                                                } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card__row">
                                        <div class="card__col card__col_param">Latitude:</div>
                                        <div class="card__col card__col_value">
                                            <span id="latitude">
                                                <?php if (isset($results['data'][$data]['latitude'])) {
                                                    echo $results['data'][$data]['latitude'];
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
                                                <?php if (isset($results['data'][$data]['longitude'])) {
                                                    echo $results['data'][$data]['longitude'];
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
            <?php
            }
            ?>
        </div>
    </div>
</div>