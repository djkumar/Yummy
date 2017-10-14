
        <!-- PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white"> Weedulu <span class="hidden-xs"> </span> © 2014-2015</span>
                </div>

             
            </div>
        </div>
        <!-- END PAGE FOOTER -->

        <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
        Note: These tiles are completely responsive,
        you can add as many as you like
        -->
        <div id="shortcut">
            <!--<ul>-->
            <!--    <li>-->
            <!--        <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>-->
            <!--    </li>-->
            <!--</ul>-->
        </div>
        
        <!-- END SHORTCUT AREA -->

        <!--================================================== -->

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    

        <!-- IMPORTANT: APP CONFIG -->
        <script src="{{ asset('backend/js/app.config.js') }}"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="{{ asset('backend/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') }}"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('backend/js/bootstrap/bootstrap.min.js') }}"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="{{ asset('backend/js/notification/SmartNotification.min.js') }}"></script>

        <!-- JARVIS WIDGETS -->
        <script src="{{ asset('backend/js/smartwidgets/jarvis.widget.min.js') }}"></script>

        <!-- EASY PIE CHARTS -->
        <script src="{{ asset('backend/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>

        <!-- SPARKLINES -->
        <script src="{{ asset('backend/js/plugin/sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- JQUERY VALIDATE -->
        <script src="{{ asset('backend/js/plugin/jquery-validate/jquery.validate.min.js') }}"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="{{ asset('backend/js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="{{ asset('backend/js/plugin/select2/select2.min.js') }}"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="{{ asset('backend/js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

        <!-- browser msie issue fix -->
        <script src="{{ asset('backend/js/plugin/msie-fix/jquery.mb.browser.min.js') }}"></script>

        <!-- FastClick: For mobile devices -->
        <script src="{{ asset('backend/js/plugin/fastclick/fastclick.min.js') }}"></script>

        <!--[if IE 8]>

        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

        <![endif]-->

        <!-- Demo purpose only -->

        <!-- MAIN APP JS FILE -->
        <script src="{{ asset('backend/js/app.min.js') }}"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="{{ asset('backend/js/speech/voicecommand.min.js') }}"></script>

        <!-- SmartChat UI : plugin -->
        <script src="{{ asset('backend/js/smart-chat-ui/smart.chat.ui.min.js') }}"></script>
        <script src="{{ asset('backend/js/smart-chat-ui/smart.chat.manager.min.js') }}"></script>
        
        <!-- PAGE RELATED PLUGIN(S) -->
        
        <!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
        <script src="{{ asset('backend/js/plugin/flot/jquery.flot.cust.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/flot/jquery.flot.tooltip.min.js') }}"></script>
        
        <!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
        <script src="{{ asset('backend/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        
        <!-- Full Calendar -->
        <script src="{{ asset('backend/js/plugin/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/fullcalendar/jquery.fullcalendar.min.js') }}"></script>
            <!-- PAGE RELATED PLUGIN(S) -->
        <script src="{{ asset('backend/js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>
        <script>
            $(document).ready(function() {

                // DO NOT REMOVE : GLOBAL FUNCTIONS!
                pageSetUp();

                /*
                 * PAGE RELATED SCRIPTS
                 */

                $(".js-status-update a").click(function() {
                    var selText = $(this).text();
                    var $this = $(this);
                    $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
                    $this.parents('.dropdown-menu').find('li').removeClass('active');
                    $this.parent().addClass('active');
                });

                /*
                * TODO: add a way to add more todo's to list
                */

                // initialize sortable
                $(function() {
                    $("#sortable1, #sortable2").sortable({
                        handle : '.handle',
                        connectWith : ".todo",
                        update : countTasks
                    }).disableSelection();
                });

                // check and uncheck
                $('.todo .checkbox > input[type="checkbox"]').click(function() {
                    var $this = $(this).parent().parent().parent();

                    if ($(this).prop('checked')) {
                        $this.addClass("complete");

                        // remove this if you want to undo a check list once checked
                        //$(this).attr("disabled", true);
                        $(this).parent().hide();

                        // once clicked - add class, copy to memory then remove and add to sortable3
                        $this.slideUp(500, function() {
                            $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
                            $this.remove();
                            countTasks();
                        });
                    } else {
                        // insert undo code here...
                    }

                })
                // count tasks
                function countTasks() {

                    $('.todo-group-title').each(function() {
                        var $this = $(this);
                        $this.find(".num-of-tasks").text($this.next().find("li").size());
                    });

                }

                /*
                * RUN PAGE GRAPHS
                */

                /* TAB 1: UPDATING CHART */
                // For the demo we use generated data, but normally it would be coming from the server



             

                var $on = false;

                // END TAB 2

                // TAB THREE GRAPH //
                /* TAB 3: Revenew  */


                /*
                 * VECTOR MAP
                 */

                data_array = {
                    "US" : 4977,
                    "AU" : 4873,
                    "IN" : 3671,
                    "BR" : 2476,
                    "TR" : 1476,
                    "CN" : 146,
                    "CA" : 134,
                    "BD" : 100
                };

                $('#vector-map').vectorMap({
                    map : 'world_mill_en',
                    backgroundColor : '#fff',
                    regionStyle : {
                        initial : {
                            fill : '#c4c4c4'
                        },
                        hover : {
                            "fill-opacity" : 1
                        }
                    },
                    series : {
                        regions : [{
                            values : data_array,
                            scale : ['#85a8b6', '#4d7686'],
                            normalizeFunction : 'polynomial'
                        }]
                    },
                    onRegionLabelShow : function(e, el, code) {
                        if ( typeof data_array[code] == 'undefined') {
                            e.preventDefault();
                        } else {
                            var countrylbl = data_array[code];
                            el.html(el.html() + ': ' + countrylbl + ' visits');
                        }
                    }
                });

                /*
                 * FULL CALENDAR JS
                 */

                if ($("#calendar").length) {
                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    var calendar = $('#calendar').fullCalendar({

                        editable : true,
                        draggable : true,
                        selectable : false,
                        selectHelper : true,
                        unselectAuto : false,
                        disableResizing : false,
                        height: "auto",

                        header : {
                            left : 'title', //,today
                            center : 'prev, next, today',
                            right : 'month, agendaWeek, agenDay' //month, agendaDay,
                        },

                        select : function(start, end, allDay) {
                            var title = prompt('Event Title:');
                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                    title : title,
                                    start : start,
                                    end : end,
                                    allDay : allDay
                                }, true // make the event "stick"
                                );
                            }
                            calendar.fullCalendar('unselect');
                        },

                        events : [{
                            title : 'All Day Event',
                            start : new Date(y, m, 1),
                            description : 'long description',
                            className : ["event", "bg-color-greenLight"],
                            icon : 'fa-check'
                        }, {
                            title : 'Long Event',
                            start : new Date(y, m, d - 5),
                            end : new Date(y, m, d - 2),
                            className : ["event", "bg-color-red"],
                            icon : 'fa-lock'
                        }, {
                            id : 999,
                            title : 'Repeating Event',
                            start : new Date(y, m, d - 3, 16, 0),
                            allDay : false,
                            className : ["event", "bg-color-blue"],
                            icon : 'fa-clock-o'
                        }, {
                            id : 999,
                            title : 'Repeating Event',
                            start : new Date(y, m, d + 4, 16, 0),
                            allDay : false,
                            className : ["event", "bg-color-blue"],
                            icon : 'fa-clock-o'
                        }, {
                            title : 'Meeting',
                            start : new Date(y, m, d, 10, 30),
                            allDay : false,
                            className : ["event", "bg-color-darken"]
                        }, {
                            title : 'Lunch',
                            start : new Date(y, m, d, 12, 0),
                            end : new Date(y, m, d, 14, 0),
                            allDay : false,
                            className : ["event", "bg-color-darken"]
                        }, {
                            title : 'Birthday Party',
                            start : new Date(y, m, d + 1, 19, 0),
                            end : new Date(y, m, d + 1, 22, 30),
                            allDay : false,
                            className : ["event", "bg-color-darken"]
                        }, {
                            title : 'Smartadmin Open Day',
                            start : new Date(y, m, 28),
                            end : new Date(y, m, 29),
                            className : ["event", "bg-color-darken"]
                        }],


                        eventRender : function(event, element, icon) {
                            if (!event.description == "") {
                                element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
                            }
                            if (!event.icon == "") {
                                element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
                            }
                        }
                    });

                };

                /* hide default buttons */
                $('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();

                // calendar prev
                $('#calendar-buttons #btn-prev').click(function() {
                    $('.fc-prev-button').click();
                    return false;
                });

                // calendar next
                $('#calendar-buttons #btn-next').click(function() {
                    $('.fc-next-button').click();
                    return false;
                });

                // calendar today
                $('#calendar-buttons #btn-today').click(function() {
                    $('.fc-button-today').click();
                    return false;
                });

                // calendar month
                $('#mt').click(function() {
                    $('#calendar').fullCalendar('changeView', 'month');
                });

                // calendar agenda week
                $('#ag').click(function() {
                    $('#calendar').fullCalendar('changeView', 'agendaWeek');
                });

                // calendar agenda day
                $('#td').click(function() {
                    $('#calendar').fullCalendar('changeView', 'agendaDay');
                });

                /*
                 * CHAT
                 */

                $.filter_input = $('#filter-chat-list');
                $.chat_users_container = $('#chat-container > .chat-list-body')
                $.chat_users = $('#chat-users')
                $.chat_list_btn = $('#chat-container > .chat-list-open-close');
                $.chat_body = $('#chat-body');

                /*
                * LIST FILTER (CHAT)
                */

                // custom css expression for a case-insensitive contains()
                jQuery.expr[':'].Contains = function(a, i, m) {
                    return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
                };

                function listFilter(list) {// header is any element, list is an unordered list
                    // create and add the filter form to the header

                    $.filter_input.change(function() {
                        var filter = $(this).val();
                        if (filter) {
                            // this finds all links in a list that contain the input,
                            // and hide the ones not containing the input while showing the ones that do
                            $.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
                            $.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
                        } else {
                            $.chat_users.find("li").slideDown();
                        }
                        return false;
                    }).keyup(function() {
                        // fire the above change event after every letter
                        $(this).change();

                    });

                }

                // on dom ready
                listFilter($.chat_users);

                // open chat list
                $.chat_list_btn.click(function() {
                    $(this).parent('#chat-container').toggleClass('open');
                })

               
            });

        </script>

        <!-- Your GOOGLE ANALYTICS CODE Below -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body>

</html>