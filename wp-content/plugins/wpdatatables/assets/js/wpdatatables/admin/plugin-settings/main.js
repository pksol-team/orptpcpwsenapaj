/**
 * Main jQuery elements controller for the plugin settings page
 *
 * Binds the jQuery control elements for manipulating the config object, binds jQuery plugins
 *
 * @author Miljko Milosevic
 * @since 23.11.2016
 */

(function($) {
    $(function(){

        /**
         * Toggle Separate MySQL Connection
         */
        $('#wdt-separate-connection').change(function(e){
            wpdatatable_plugin_config.setSeparateConnection( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Change language on select change - "Interface language"
         */
        $('#wdt-interface-language').change(function(e){
            wpdatatable_plugin_config.setLanguage( $(this).val() );
        });

        /**
         * Change date format - "Date format"
         */
        $('#wdt-date-format').change(function(e){
            wpdatatable_plugin_config.setDateFormat( $(this).val() );
        });

        /**
         * Number of tables on admin page - "Tables per admin page"
         */
        $('#wdt-tables-per-page').change(function(e){
            wpdatatable_plugin_config.setTablesAdmin( $(this).val() );
        });

        /**
         * Change time format - "Date time"
         */
        $('#wdt-time-format').change(function(e){
            wpdatatable_plugin_config.setTimeFormat( $(this).val() );
        });

        /**
         * Change base skin - "Base skin"
         */
        $('#wdt-base-skin').change(function(e){
            wpdatatable_plugin_config.setBaseSkin( $(this).val() );
        });

        /**
         * Change number format - "Number format"
         */
        $('#wdt-number-format').change(function(e){
            wpdatatable_plugin_config.setNumberFormat( $(this).val() );
        });

        /**
         * Change CSV delimiter - "CSV delimiter"
         */
        $('#wdt-csv-delimiter').change(function(e){
            wpdatatable_plugin_config.setCSVDelimiter( $(this).val() );
        });

        /**
         * Change position of advance filter - "Render advanced filter"
         */
        $('#wp-render-filter').change(function(e){
            wpdatatable_plugin_config.setRenderPosition( $(this).val() );
        });

        /**
         * Set number of decimal places - "Decimal places"
         */
        $('#wdt-decimal-places').change(function(e){
            wpdatatable_plugin_config.setDecimalPlaces( $(this).val() );
        });

        /**
         * Set Tablet width - "Tablet width"
         */
        $('#wdt-tablet-width').change(function(e){
            wpdatatable_plugin_config.setTabletWidth( $(this).val() );
        });

        /**
         * Set Mobile width - "Tablet width"
         */
        $('#wdt-mobile-width').change(function(e){
            wpdatatable_plugin_config.setMobileWidth( $(this).val() );
        });

        /**
         * Set Timepicker step in minutes - "Timepicker step"
         */
        $('#wdt-timepicker-range').change(function(e){
            wpdatatable_plugin_config.setTimepickerStep( $(this).val() );
        });

        /**
         * Set Purchase code - "Purchase code"
         */
        $('#wdt-purchase-code').change(function(e){
            wpdatatable_plugin_config.setPurchaseCode( $(this).val() );
        });

        /**
         * Set Include Bootstrap
         */
        $('#wdt-include-bootstrap').change(function(e){
            wpdatatable_plugin_config.setIncludeBootstrap( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Set Include Bootstrap on back-end
         */
        $('#wdt-include-bootstrap-back-end').change(function(e){
            wpdatatable_plugin_config.setIncludeBootstrapBackEnd( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Set SUM functions label
         */
        $('#wdt-sum-function-label').change(function(e){
            wpdatatable_plugin_config.setSumFunctionsLabel( $(this).val() );
        });

        /**
         * Set AVG functions label
         */
        $('#wdt-avg-function-label').change(function(e){
            wpdatatable_plugin_config.setAvgFunctionsLabel( $(this).val() );
        });

        /**
         * Set MIN functions label
         */
        $('#wdt-min-function-label').change(function(e){
            wpdatatable_plugin_config.setMinFunctionsLabel( $(this).val() );
        });

        /**
         * Set MAX functions label
         */
        $('#wdt-max-function-label').change(function(e){
            wpdatatable_plugin_config.setMaxFunctionsLabel( $(this).val() );
        });

        /**
         * Toggle Parse shortcodes in strings
         */
        $('#wdt-parse-shortcodes').change(function(e){
            wpdatatable_plugin_config.setParseShortcodes( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Toggle Align numbers
         */
        $('#wdt-numbers-align').change(function(e){
            wpdatatable_plugin_config.setAlignNumber( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Change table font
         */
        $('#wdt-table-font').change(function(e){
            wpdatatable_plugin_config.setColorFontSetting( $(this).data('name'), $(this).val() );
        });

        /**
         * Change table font size
         */
        $('#wdt-font-size').change(function (e) {
            wpdatatable_plugin_config.setColorFontSetting( $(this).data('name'), $(this).val() );

        });

        /**
         * Change table font color
         */
        $('.color-picker').on('changeColor', function(e) {
            wpdatatable_plugin_config.setColorFontSetting( $(this).find('.cp-value').data('name'), $(this).find('input').val() );
        });

        /**
         * Change border input radius
         */
        $('#wdt-border-input-radius').change(function(e){
            wpdatatable_plugin_config.setColorFontSetting( $(this).prop('id'), $(this).val() );
        });

        /**
         * Remove borders from table
         */
        $('#wdt-remove-borders').change(function(e){
            wpdatatable_plugin_config.setBorderRemoval( $(this).is(':checked') ? 1 : 0 );
        });

        /**
         * Remove borders from header
         */
        $('#wdt-remove-borders-header').change(function(e){
            wpdatatable_plugin_config.setBorderRemovalHeader( $(this).is(':checked') ? 1 : 0 );
        });
        /**
         * Set Custom Js - "Custom wpDataTables JS"
         */
        $('#wdt-custom-js').change(function(e){
            wpdatatable_plugin_config.setCustomJs( $(this).val() );
        });

        /**
         * Set Custom CSS - "Custom wpDataTables CSS"
         */
        $('#wdt-custom-css').change(function(e){
            wpdatatable_plugin_config.setCustomCss( $(this).val() );
        });

        /**
         * Toggle minified JS - "Use minified wpDataTables Javascript"
         */
        $('#wdt-minified-js').change(function(e){
            wpdatatable_plugin_config.setMinifiedJs( $(this).is(':checked') ? 1 : 0 );
        });



        /**
         * Load current config on load
         */
        wpdatatable_plugin_config.setSeparateConnection         ( wdt_current_config.wdtUseSeparateCon == 1 ? 1 : 0 );
        wpdatatable_plugin_config.setLanguage                   ( wdt_current_config.wdtInterfaceLanguage );
        wpdatatable_plugin_config.setDateFormat                 ( wdt_current_config.wdtDateFormat );
        wpdatatable_plugin_config.setTablesAdmin                ( wdt_current_config.wdtTablesPerPage );
        wpdatatable_plugin_config.setTimeFormat                 ( wdt_current_config.wdtTimeFormat );
        wpdatatable_plugin_config.setBaseSkin                   ( wdt_current_config.wdtBaseSkin );
        wpdatatable_plugin_config.setNumberFormat               ( wdt_current_config.wdtNumberFormat );
        wpdatatable_plugin_config.setCSVDelimiter               ( wdt_current_config.wdtCSVDelimiter );
        wpdatatable_plugin_config.setRenderPosition             ( wdt_current_config.wdtRenderFilter );
        wpdatatable_plugin_config.setDecimalPlaces              ( wdt_current_config.wdtDecimalPlaces );
        wpdatatable_plugin_config.setTabletWidth                ( wdt_current_config.wdtTabletWidth );
        wpdatatable_plugin_config.setMobileWidth                ( wdt_current_config.wdtMobileWidth );
        wpdatatable_plugin_config.setPurchaseCode               ( wdt_current_config.wdtPurchaseCode );
        wpdatatable_plugin_config.setIncludeBootstrap           ( wdt_current_config.wdtIncludeBootstrap == 1 ? 1 : 0 );
        wpdatatable_plugin_config.setIncludeBootstrapBackEnd    ( wdt_current_config.wdtIncludeBootstrapBackEnd == 1 ? 1 : 0 );
        wpdatatable_plugin_config.setParseShortcodes            ( wdt_current_config.wdtParseShortcodes == 1 ? 1 : 0 );
        wpdatatable_plugin_config.setAlignNumber                ( wdt_current_config.wdtNumbersAlign == 1 ? 1 : 0  );
        wpdatatable_plugin_config.setCustomCss                  ( wdt_current_config.wdtCustomCss );
        wpdatatable_plugin_config.setCustomJs                   ( wdt_current_config.wdtCustomJs );
        wpdatatable_plugin_config.setMinifiedJs                 ( wdt_current_config.wdtMinifiedJs == 1 ? 1 : 0  );
        wpdatatable_plugin_config.setSumFunctionsLabel          ( wdt_current_config.wdtSumFunctionsLabel );
        wpdatatable_plugin_config.setAvgFunctionsLabel          ( wdt_current_config.wdtAvgFunctionsLabel );
        wpdatatable_plugin_config.setMinFunctionsLabel          ( wdt_current_config.wdtMinFunctionsLabel );
        wpdatatable_plugin_config.setMaxFunctionsLabel          ( wdt_current_config.wdtMaxFunctionsLabel );
        wpdatatable_plugin_config.setBorderRemoval              ( wdt_current_config.wdtBorderRemoval == 1 ? 1 : 0  );
        wpdatatable_plugin_config.setBorderRemovalHeader        ( wdt_current_config.wdtBorderRemovalHeader == 1 ? 1 : 0  );

        for (var value in wdt_current_config.wdtFontColorSettings) {
            wpdatatable_plugin_config.setColorFontSetting ( value , wdt_current_config.wdtFontColorSettings[value] );
        }

        /**
         * Show "Reset colors and fonts to default" when "Color and font settings" tab is active
         */
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href");
            if (target == '#color-and-font-settings') {
                $('.reset-color-settings').show();
            } else {
                $('.reset-color-settings').hide();
            }
        });

        /**
         * Reset color settings
         */
        $('.reset-color-settings').click(function(e){
            e.preventDefault();
            $('#color-and-font-settings input.cp-value').val('').change();
            wdt_current_config.wdtFontColorSettings = _.mapObject(
                    wdt_current_config.wdtFontColorSettings,
                    function( color ){ return ''; }
                );
            $('#color-and-font-settings .selectpicker').selectpicker('val', '');
            $('input#wdt-border-input-radius').val('');
            $('input#wdt-font-size').val('');
        });

        /**
         * Test Separate connection settings
         */
        $('#separate-connection').find(".wdt-my-sql-test").click(function () {
            testConnections([
                getConnectionData(
                    $(this).closest(".tab-pane")
                )
            ], null);
        });

        /**
         * Save settings on Apply button
         */
        $('button.wdt-apply').click(function(e){

            $('.wdt-preload-layer').animateFadeIn();

            if (wdt_current_config.wdtUseSeparateCon) {
                var connections = getAllConnectionData();

                if (!areConnectionsValid(connections)) {
                    return;
                }

                testConnections(connections, function () {
                    savePluginSettings(connections);
                });
            } else {
                savePluginSettings(null);
            }
        });

        /**
         * Add Connection
         */
        $('#wp-my-sql-add').click(function () {
            addNewConnection();
        });

      /**
       * Change connection default status
       */
        function changeDefaultConnection (element) {
            var checked = $(element).is(':checked') ? 1 : 0;

            if (checked) {
                $(".wdt-my-sql-default-checkbox").prop('checked', false);
            }

            $(element).prop( 'checked', checked );
        }

        $(".wdt-my-sql-default-checkbox").change(function (e) {
            changeDefaultConnection(this);
        });

        /**
         * Name the connection
         */
        $("#separate-connection").find("input[name='wdt-my-sql-name']").on('input', function (e) {
            changeConnectionName(this.value);
        });

        /**
         * Delete the connection
         */
        $(".wdt-my-sql-delete").click(function (e) {
            deleteConnection(this);
        });

        /**
         * Change connection name
         */
        function changeConnectionName(value) {
            if (value.match(/[^a-zA-Z0-9 ]/g)) {
                value = value.replace(/[^a-zA-Z0-9 ]/g, '');
            }

            $("#separate-connection").find(".tab-nav .active").find("a").text(value ? value : 'New Connection');
        }

      /**
       * Add new connection
       */
        function addNewConnection() {
            var element = $("#separate-connection");

            var count = parseInt(element.attr("data-count") ? element.attr("data-count") : "0");
            element.attr("data-count", count + 1);

            // Navigation
            var navigation = element.find(".tab-nav");
            navigation.find("a").parent().removeClass("active");

            var newConnectionNav = $('<li class="active"><a href="#connection' + count + '" aria-controls="connection-' + count + '" role="tab" data-toggle="tab" style="text-transform: none;">New Connection</a></li>');
            navigation.append(newConnectionNav);

            // Content
            element.find(".tab-content").children().removeClass("active");
            var content = $("#separate-connection-form").find(".tab-pane");

            var newConnectionContent = content.clone(false);

            newConnectionContent.attr("id", "connection" + count);
            newConnectionContent.find("input").attr("value", "");
            newConnectionContent.addClass("active");

            newConnectionContent.find(".select").html('<select class="selectpicker wdt-my-sql-vendor" name="wdt-my-sql-vendor">' +
                  '<option value="" disabled selected></option>' +
                  '<option value="mysql">MySQL</option>' +
                  '<option value="mssql">MSSQL</option>' +
                  '<option value="postgresql">PostgreSQL</option>' +
                  '</select>');

            newConnectionContent.find(".select").find("select").selectpicker();

            newConnectionContent.find("select option[value='']").prop("selected", true);
            newConnectionContent.find(".wdt-my-sql-default-checkbox").attr("id", "wdt-my-sql-default-" + count);
            newConnectionContent.find(".wdt-my-sql-default-checkbox").prop('checked', false);
            newConnectionContent.find(".wdt-my-sql-default-checkbox").change(function (e) {
                changeDefaultConnection(this);
            });

            newConnectionContent.find(".wdt-my-sql-default-label").attr("for", "wdt-my-sql-default-" + count);
            newConnectionContent.find(".wdt-my-sql-test").click(function () {
                  testConnections([
                        getConnectionData(
                            $(this).closest(".tab-pane")
                        )
                  ], null);
            });
            newConnectionContent.find(".wdt-my-sql-delete").click(function () {
                deleteConnection(this);
            });
            newConnectionContent.find("input[name='wdt-my-sql-name']").on('input', function (e) {
                changeConnectionName(this.value);
            });

            var connections = getAllConnectionData();
            var connectionIds = []

            for (var i = 0; i < connections.length; i++) {
                  connectionIds.push(connections[i].id)
            }

            while ((id = Math.random().toString(36).substr(2, 16)) && !(connectionIds.indexOf(id) === -1)) {
                id = Math.random().toString(36).substr(2, 16);
            }

            newConnectionContent.find("input[name='wdt-my-sql-id']").val(id);

            element.find(".tab-content").append(newConnectionContent);

            changeConnectionVendor(newConnectionContent)
        }

        function changeConnectionVendor(element) {
            var selectVendorElement = $(element).find('.wdt-my-sql-vendor');

            selectVendorElement.change(function (e) {
                var vendor = selectVendorElement.find(":selected").val();
                var defaultPort = '';

                if (vendor === "mysql")
                    defaultPort = '3306';
                else if (vendor === "mssql")
                    defaultPort = '1433';
                else if (vendor === "postgresql")
                    defaultPort = '5432';

                $(element).find("input[name='wdt-my-sql-port']").val(defaultPort);

                $(element).find('.zmdi-help-outline.connection-port').attr('title', 'Port for the connection' + (defaultPort ? ' (default: ' + defaultPort + ')' : '')).tooltip('fixTitle');

                setTimeout(function () {
                    $(element).tooltip({
                        selector: '[data-toggle="tooltip"]'
                    });
                }, 500);
            });
        }

        $(".separate-connection").each(function (index, connectionContent) {
            changeConnectionVendor(connectionContent)
        })

        function deleteConnection(element) {
            $('#wdt-delete-modal').modal('show');

            var confirmButton = $('#wdt-delete-modal').find('#wdt-browse-delete-button');

            confirmButton.unbind("click");
            confirmButton.click(function () {
                $("#separate-connection").find(".tab-nav .active").remove();

                $(element).closest(".tab-pane").remove();

                $('#wdt-delete-modal').modal('hide');

                savePluginSettings(getAllConnectionData());
            });
        }

        function getConnectionData(tab) {
            return {
                host: tab.find("input[name='wdt-my-sql-host']").val(),
                database: tab.find("input[name='wdt-my-sql-db']").val(),
                user: tab.find("input[name='wdt-my-sql-user']").val(),
                password: tab.find("input[name='wdtMySqlPwd']").val(),
                port: tab.find("input[name='wdt-my-sql-port']").val(),
                vendor: tab.find("select[name='wdt-my-sql-vendor'] option:selected").val(),
                name: tab.find("input[name='wdt-my-sql-name']").val(),
                id: tab.find("input[name='wdt-my-sql-id']").val(),
                default: tab.find(".wdt-my-sql-default-checkbox").is(':checked') ? 1 : 0
            };
        }

        function getAllConnectionData() {
            var connections = [];

            $("#separate-connection").find(".tab-pane").each(function (index) {
                connections.push(getConnectionData(
                    $(this).closest(".tab-pane"))
                );
            });

            return connections;
        }

        function testConnections(connections, callback) {
            $('.wdt-preload-layer').animateFadeIn();
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'wpdatatables_test_separate_connection_settings',
                    wdtSeparateCon: connections
                },
                success: function (data) {
                    $('.wdt-preload-layer').animateFadeOut();
                    if (data.errors.length > 0) {
                        var errorMessage = '';
                        for (var i in data.errors) {
                            errorMessage += data.errors[i] + '<br/>';
                        }
                        // Show error if returned
                        $('#wdt-error-modal .modal-body').html(errorMessage);
                        $('#wdt-error-modal').modal('show');
                        return;

                    } else if (data.success.length > 0) {
                        var successMessage = '';
                        for (var i in data.success) {
                            successMessage += data.success[i] + '<br/>';
                        }
                        if (callback !== null) {
                            callback();
                        }
                        // Show success message
                        wdtNotify(
                            wpdatatables_edit_strings.success,
                            successMessage,
                            'success'
                        );
                    }
                }
            });
        }

        function areConnectionsValid(connections) {
            // check if connections have duplicate names
            var connectionsNames = [];

            for (var i = 0; i < connections.length; i++) {
                connectionsNames.push(connections[i]['name'].toLowerCase());
            }

            connectionsNames = connectionsNames.sort();

            for (var i = 0; i < connectionsNames.length - 1; i++) {
                if (connectionsNames[i + 1] === connectionsNames[i]) {
                    $('#wdt-error-modal .modal-body').html("Connections can't have same names!");
                    $('#wdt-error-modal').modal('show');
                    $('.wdt-preload-layer').animateFadeOut();
                    return false;
                }
            }

            // check if connections have all parameters
            for (var i = 0; i < connections.length; i++) {
            if (connections[i]['name'].trim() === '' ||
                connections[i]['database'].trim() === '' ||
                connections[i]['host'].trim() === '' ||
                connections[i]['port'].trim() === '' ||
                connections[i]['user'].trim() === '' ||
                connections[i]['password'].trim() === '' ||
                connections[i]['vendor'].trim() === ''
            ) {
                $("#separate-connection").find(".tab-pane").each(function (index) {
                    var tab = $(this).closest(".tab-pane");

                    if (tab.find("input[name='wdt-my-sql-name']").val() === connections[i]['name']) {
                        var connectionTab = $('a[href$="' + tab.attr('id') + '"]:first');

                        $(connectionTab).parent().parent().children().removeClass('active');
                        $(connectionTab).parent().addClass('active');

                        $(".separate-connection-tab").parent().children().removeClass('active');
                        $(".separate-connection-tab").addClass('active');

                        $('.tab-pane').each(function (index) {
                            $(this).removeClass('active');
                        });

                        $("#" + tab.attr('id')).addClass('active');
                        $("#separate-connection").addClass('active');
                    }
                });

                $('#wdt-error-modal .modal-body').html("Please insert connection parameters!");
                $('#wdt-error-modal').modal('show');
                $('.wdt-preload-layer').animateFadeOut();
                    return false;
                }
            }

            return true;
        }

        function savePluginSettings(connections) {
            if (connections !== null) {
                wdt_current_config.wdtSeparateCon = JSON.stringify(connections);
            }

            $.ajax({
                url: ajaxurl,
                dataType: 'json',
                method: 'POST',
                data: {
                    action: 'wpdatatables_save_plugin_settings',
                    settings: wdt_current_config
                },
                success: function () {
                    $('.wdt-preload-layer').animateFadeOut();
                    wdtNotify(
                    wpdatatables_edit_strings.success,
                    wpdatatables_edit_strings.settings_saved_successful,
                    'success'
                    );
                }
            });
        }
    });
})(jQuery);

