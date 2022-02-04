<div class="gdpr-panel gdpr-panel--hidden">

    <div class="gdpr-container">
        <h5 class="gdpr-panel__title subheader">Deze website gebruikt cookies</h5>
        <p class="gdpr-panel__description">
            We gebruiken cookies om inhoud en advertenties te personaliseren, om functies van sociale media te bieden en om ons verkeer te analyseren. We delen ook informatie over uw gebruik van onze site met onze partners op het gebied van sociale media, reclame en analyse, die deze mogelijk combineren met andere informatie die u aan hen hebt verstrekt of die zij hebben verzameld bij uw gebruik van hun diensten. U gaat akkoord met onze cookies als u onze website blijft gebruiken.</p>
        <div class="gdpr-options">
            <div class="gdpr__checkbox gdpr__checkbox--disabled">
                <input id="gdpr-necessary" type="checkbox" name="necessary" value="Necessary Cookies" disabled checked>
                <label for="gdpr-necessary">Functionele Cookies</label>
            </div>

            <!-- <div class="gdpr__checkbox">
                <input id="gdpr-preferences" type="checkbox" name="preferences" value="Preferences Cookies" <?php echo isset($_COOKIE["preferences"]) && $_COOKIE["preferences"] === "1" || !isset($_COOKIE["preferences"]) ? "checked" : "" ?>>
                <label for="gdpr-preferences">Preferences Cookies</label>
            </div> -->

            <div class="gdpr__checkbox">
                <input id="gdpr-statistics" type="checkbox" name="statistics" value="Statistics Cookies" <?php echo isset($_COOKIE["statistics"]) && $_COOKIE["statistics"] === "1" || !isset($_COOKIE["statistics"]) ? "checked" : "" ?>>
                <label for="gdpr-statistics">Analytics Cookies</label>
            </div>

            <div class="gdpr__checkbox">
                <input id="gdpr-marketing" type="checkbox" name="marketing" value="Marketing Cookies" <?php echo isset($_COOKIE["marketing"]) && $_COOKIE["marketing"] === "1" || !isset($_COOKIE["marketing"]) ? "checked" : "" ?>>
                <label for="gdpr-marketing">Marketing Cookies</label>
            </div>
        </div>
        <button class="gdpr__accept btn">Accepteren</button>
    </div>
</div>

<script>
    <?php if (isset($_COOKIE["preferences"]) && $_COOKIE["preferences"] === "1") { ?>
    if(window.dataLayer) {
        console.log('cookieconsent_preferences');
        dataLayer.push({'event': 'cookieconsent_preferences'});
    }
    <?php } ?>

    <?php if (isset($_COOKIE["statistics"]) && $_COOKIE["statistics"] === "1") { ?>
    if(window.dataLayer) {
        console.log('cookieconsent_statistics');
        dataLayer.push({'event': 'cookieconsent_statistics'});
    }
    <?php } ?>

    <?php if (isset($_COOKIE["marketing"]) && $_COOKIE["marketing"] === "1") { ?>
    if(window.dataLayer) {
        console.log('cookieconsent_marketing');
        dataLayer.push({'event':'cookieconsent_marketing'});
    }
    <?php } ?>
</script>