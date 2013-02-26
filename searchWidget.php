        <!-- Search Widget Page -->
        <div data-role="page" id="searchWidget">
            <div data-theme="b" data-role="header" data-position="fixed">
                <a id="menu_btn" data-role="button" href="#main_page" data-inline="true" data-icon="home">
                    menu
                </a>
                <h3>
                    New Trip
                </h3>
                
            </div>
            <div data-role="content">
                <select name="select-native-1" id="select-airport">
                    <option>Select Airport</option>
                    <option value="1">Mesa, AZ - Phoenix-Mesa Gateway (AZA)</option>
                    <option value="2">Phoenix, AZ - Sky Harbor Intl (PHX)</option>
                </select>
                <div data-role="fieldcontain" id="locationType">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>
                            Pickup Location Type:
                        </legend>
                        <input id="radio1" name="" value="radio1" type="radio" checked="checked"/>
                        <label for="radio1" id="zip">
                            Zip
                        </label>
                        <input id="radio2" name="" value="radio2" type="radio" />
                        <label for="radio2" id="landmark">
                            Landmark
                        </label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain" id="locationType_text">
                    <fieldset data-role="controlgroup" id="location_area">
                        <label for="textinput1">
                        </label>
                        <input name="" id="zip_input" placeholder="Enter Zip Code" value="" type="tel" data-ajax="false" />
                        <input name="" id="landmark_input" placeholder="Enter Landmark e.g. Grand Hotel, Phoenix, AZ" value="" type="text" data-ajax="false" />
                    </fieldset>
                </div>
                <div id="map_canvas"></div>

                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <input id="radio3" class="round-trip" name="" value="radio1" type="radio" checked="checked"/>
                        <label for="radio3">
                            Round Trip
                        </label>
                        <input id="radio4" class="one-way" name="" value="radio4" type="radio" />
                        <label for="radio4">
                            One-Way
                        </label>
                    </fieldset>
                </div>
                <div id="checkboxes1" class="return_trip" data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="vertical">
                        <legend>
                        </legend>
                        <input id="checkbox1" class="trip_check" name="" type="checkbox" />
                        <label for="checkbox1">
                            # of passengers different on return trip
                        </label>
                    </fieldset>
                </div>
                <div id="adult">
                    <select name="select-choice-0" id="select-choice-0">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                    </select>
                    <label for="select-choice-0" class="select" id="adult_label">Adult</label>
                </div>
                <div id="children">
                    <select name="select-choice-0" id="select-choice-0">
                       <option value="0">0</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                    </select>
                    <label for="select-choice-0" class="select" id="children_label">Children(under 3years old)</label>
                </div>
                <div id="wheelchair">
                    <h3>
                        Wheelchair Access
                    </h3>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="toggleswitch1">
                            </label>
                            <select name="toggleswitch1" id="toggleswitch1" data-theme="" data-role="slider" data-mini="true">
                                <option value="off">
                                    Off
                                </option>
                                <option value="on">
                                    On
                                </option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput2">
                        </label>
                        <input name="" id="textinput2" placeholder="Promo Code or Group Code" value="" type="text" />
                    </fieldset>
                </div>
                <a data-role="button" id="searchBtn" href="#orderSummary" data-theme="b">
                    SEARCH
                </a>
            </div>
        </div>
