        <!-- Customer Info Page -->
        <div data-role="page" id="customerInfo">
            <div data-theme="b" data-role="header">
                <a data-role="button" href="#orderSummary" class="ui-btn-left">
                    Summary
                </a>
                <h3>
                    Book Trip
                </h3>
            </div>
            <div data-role="content">
                <div id="total_fare">
                    <div style="width: 150px; height: 70px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8; margin: 0 auto;">
                        <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                    </div>
                    <h3>Total Fare: $64</h3>
                    <span>Including <span id="gratuityVal">X</span> for gratuity and Y charge for excess baggage <a href="#orderSummary">(Change)</a></span>
                    <div id="leavingTo">
                        <p>Leaving TO Airport</p>
                        <span style="clear: both; display: block;">&lt; Zip/Landmark &gt;</span>
                        <h5 id="adultCnt">Adult: <span>2</span></h5>
                        <h5 id="childrenCnt">Children: <span>0</span></h5>
                    </div>
                    <div id="returningFrom">
                        <p>Returning FROM Airport</p>
                        <span style="clear: both; display: block;">&lt; Zip/Landmark &gt;</span>
                        <h5 id="adultCnt">Adult: <span>2</span></h5>
                        <h5 id="childrenCnt">Children: <span>0</span></h5>
                    </div>
                    <a id="changeBtn" href="#searchWidget" data-role="button" data-theme="b">Change</a>
                </div>
                <div id="returnCustomer">
                    <h5>Returning Customer?</h5>
                    <a href="#loginPage">Log in</a>
                </div>
                <h3 id="passDetail_title">Passenger Details</h3>
                <div id="passengerDetail">
                    <input data-clear-btn="true" name="firstName" id="firstName" value="" type="text" placeholder="First Name">
                    <input data-clear-btn="true" name="lastName" id="lastName" value="" type="text" placeholder="Last Name">
                    <input data-clear-btn="true" name="phoneNumber" id="phoneNumber" value="" type="tel" placeholder="Phone Number">
                    <input data-clear-btn="true" name="email" id="email" value="" type="email" placeholder="Email">
                    <label><input name="emailCheck" id="emailCheck" class="custom" value="" type="checkbox" data-mini="true">Send me special offers via email</label>
                </div>
                <h3 id="flightInfo_title">Flight Information</h3>
                <div id="flightInfo">
                    <select name="selAirline" id="selAirline">
                        <option selected="selected" value="0">Select Airline</option> 
                        <option value="AM">AEROMEXICO</option> 
                        <option value="AC">AIR CANADA</option> 
                        <option value="AF">AIR FRANCE</option> 
                        <option value="FL">AirTran Airways</option> 
                        <option value="AS">ALASKA AIRLINES</option> 
                        <option value="NH">ALL NIPPON AIRWAYS</option> 
                        <option value="AA">AMERICAN AIRLINES</option> 
                        <option value="OZ">ASIANA AIRLINES</option> 
                        <option value="AV">AVIANCA</option> 
                        <option value="BA">BRITISH AIRWAYS</option> 
                        <option value="MU">CHINA EASTERN AIRLINES</option> 
                        <option value="CZ">CHINA SOUTHERN AIRLINES</option> 
                        <option value="CM">COPA AIRLINES</option> 
                        <option value="DL">DELTA AIR LINES</option> 
                        <option value="LY">EL AL ISRAEL AIRLINES</option> 
                        <option value="EY">ETIHAD AIRWAYS</option> 
                        <option value="FX">FEDEX</option> 
                        <option value="F9">FRONTIER AIRLINES INC.</option> 
                        <option value="G7">GOJET AIRLINES</option> 
                        <option value="HU">HAINAN AIRLINES</option> 
                        <option value="JL">JAPAN AIRLINES INTERNATIONAL</option> 
                        <option value="B6">JETBLUE AIRWAYS CORPORATION</option> 
                        <option value="KL">KLM-ROYAL DUTCH AIRLINES</option> 
                        <option value="LR">LACSA-LINEAS AEREAS COSTARRICENSES</option> 
                        <option value="LA">LAN AIRLINES</option> 
                        <option value="XL">LANECUADOR</option> 
                        <option value="??">Other/Unknown/No Flight</option> 
                        <option value="QF">QANTAS AIRWAYS</option> 
                        <option value="SA">SOUTH AFRICAN AIRWAYS</option> 
                        <option value="WN">SOUTHWEST AIRLINES</option> 
                        <option value="NK">SPIRIT AIRLINES</option> 
                        <option value="TA">TACA INTERNATIONAL AIRLINES</option> 
                        <option value="JJ">TAM LINHAS AEREAS</option> 
                        <option value="UA">UNITED AIRLINES</option> 
                        <option value="US">US AIRWAYS</option> 
                        <option value="VA">VAUSTRALIA</option> 
                        <option value="WS">WESTJET</option>
                    </select>
                    <input data-clear-btn="true" name="flightNum" id="flightNum" value="" type="text" placeholder="Flight Number">
                    <select name="domInt" id="domInt">
                        <option value="domestic">Domestic</option>
                        <option value="international">International</option>
                    </select>
                    <div id="dateTime">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "flipbox"}' placeholder="Depature Date" value="">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "timeflipbox"}' placeholder="Depature Time" value="">
                    </div>
                </div>
                <h3 id="departFlight_title">Departure Flight Info(To the Airport)</h3>
                <div id="departFlightInfo">
                    <select name="selAirline" id="selAirline">
                        <option selected="selected" value="0">Select Airline</option> 
                        <option value="AM">AEROMEXICO</option> 
                        <option value="AC">AIR CANADA</option> 
                        <option value="AF">AIR FRANCE</option> 
                        <option value="FL">AirTran Airways</option> 
                        <option value="AS">ALASKA AIRLINES</option> 
                        <option value="NH">ALL NIPPON AIRWAYS</option> 
                        <option value="AA">AMERICAN AIRLINES</option> 
                        <option value="OZ">ASIANA AIRLINES</option> 
                        <option value="AV">AVIANCA</option> 
                        <option value="BA">BRITISH AIRWAYS</option> 
                        <option value="MU">CHINA EASTERN AIRLINES</option> 
                        <option value="CZ">CHINA SOUTHERN AIRLINES</option> 
                        <option value="CM">COPA AIRLINES</option> 
                        <option value="DL">DELTA AIR LINES</option> 
                        <option value="LY">EL AL ISRAEL AIRLINES</option> 
                        <option value="EY">ETIHAD AIRWAYS</option> 
                        <option value="FX">FEDEX</option> 
                        <option value="F9">FRONTIER AIRLINES INC.</option> 
                        <option value="G7">GOJET AIRLINES</option> 
                        <option value="HU">HAINAN AIRLINES</option> 
                        <option value="JL">JAPAN AIRLINES INTERNATIONAL</option> 
                        <option value="B6">JETBLUE AIRWAYS CORPORATION</option> 
                        <option value="KL">KLM-ROYAL DUTCH AIRLINES</option> 
                        <option value="LR">LACSA-LINEAS AEREAS COSTARRICENSES</option> 
                        <option value="LA">LAN AIRLINES</option> 
                        <option value="XL">LANECUADOR</option> 
                        <option value="??">Other/Unknown/No Flight</option> 
                        <option value="QF">QANTAS AIRWAYS</option> 
                        <option value="SA">SOUTH AFRICAN AIRWAYS</option> 
                        <option value="WN">SOUTHWEST AIRLINES</option> 
                        <option value="NK">SPIRIT AIRLINES</option> 
                        <option value="TA">TACA INTERNATIONAL AIRLINES</option> 
                        <option value="JJ">TAM LINHAS AEREAS</option> 
                        <option value="UA">UNITED AIRLINES</option> 
                        <option value="US">US AIRWAYS</option> 
                        <option value="VA">VAUSTRALIA</option> 
                        <option value="WS">WESTJET</option>
                    </select>
                    <input data-clear-btn="true" name="flightNum" id="flightNum" value="" type="text" placeholder="Flight Number">
                    <select name="domInt" id="domInt">
                        <option value="domestic">Domestic</option>
                        <option value="international">International</option>
                    </select>
                    <div id="dateTime">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "flipbox"}' placeholder="Depature Date" value="">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "timeflipbox"}' placeholder="Depature Time" value="">
                    </div>
                    <div id="pickupTime">
                        <span id="pickup_title">Pickup Times</span>
                        <select name="pickup_times" id="pickup_times">
                            <option value="1">March 02, 2013 4:00am</option>
                            <option value="2">March 02, 2013 4:30am</option>
                            <option value="3">March 02, 2013 5:00am</option>
                        </select>
                    </div>
                </div>
                <h3 id="arrivalFlight_title">Arrival Flight Info(From the Airport)</h3>
                <div id="arrivalFlightInfo">
                    <select name="selAirline" id="selAirline">
                        <option selected="selected" value="0">Select Airline</option> 
                        <option value="AM">AEROMEXICO</option> 
                        <option value="AC">AIR CANADA</option> 
                        <option value="AF">AIR FRANCE</option> 
                        <option value="FL">AirTran Airways</option> 
                        <option value="AS">ALASKA AIRLINES</option> 
                        <option value="NH">ALL NIPPON AIRWAYS</option> 
                        <option value="AA">AMERICAN AIRLINES</option> 
                        <option value="OZ">ASIANA AIRLINES</option> 
                        <option value="AV">AVIANCA</option> 
                        <option value="BA">BRITISH AIRWAYS</option> 
                        <option value="MU">CHINA EASTERN AIRLINES</option> 
                        <option value="CZ">CHINA SOUTHERN AIRLINES</option> 
                        <option value="CM">COPA AIRLINES</option> 
                        <option value="DL">DELTA AIR LINES</option> 
                        <option value="LY">EL AL ISRAEL AIRLINES</option> 
                        <option value="EY">ETIHAD AIRWAYS</option> 
                        <option value="FX">FEDEX</option> 
                        <option value="F9">FRONTIER AIRLINES INC.</option> 
                        <option value="G7">GOJET AIRLINES</option> 
                        <option value="HU">HAINAN AIRLINES</option> 
                        <option value="JL">JAPAN AIRLINES INTERNATIONAL</option> 
                        <option value="B6">JETBLUE AIRWAYS CORPORATION</option> 
                        <option value="KL">KLM-ROYAL DUTCH AIRLINES</option> 
                        <option value="LR">LACSA-LINEAS AEREAS COSTARRICENSES</option> 
                        <option value="LA">LAN AIRLINES</option> 
                        <option value="XL">LANECUADOR</option> 
                        <option value="??">Other/Unknown/No Flight</option> 
                        <option value="QF">QANTAS AIRWAYS</option> 
                        <option value="SA">SOUTH AFRICAN AIRWAYS</option> 
                        <option value="WN">SOUTHWEST AIRLINES</option> 
                        <option value="NK">SPIRIT AIRLINES</option> 
                        <option value="TA">TACA INTERNATIONAL AIRLINES</option> 
                        <option value="JJ">TAM LINHAS AEREAS</option> 
                        <option value="UA">UNITED AIRLINES</option> 
                        <option value="US">US AIRWAYS</option> 
                        <option value="VA">VAUSTRALIA</option> 
                        <option value="WS">WESTJET</option>
                    </select>
                    <input data-clear-btn="true" name="flightNum" id="flightNum" value="" type="text" placeholder="Flight Number">
                    <select name="domInt" id="domInt">
                        <option value="domestic">Domestic</option>
                        <option value="international">International</option>
                    </select>
                    <div id="dateTime">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "flipbox"}' placeholder="Depature Date" value="">
                        <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "timeflipbox"}' placeholder="Depature Time" value="">
                    </div>
                </div>
                <h3 id="pickup_title">Address</h3>
                <div id="pickupLocation">
                    <input data-clear-btn="true" name="streetAddress" id="streetAddress" value="" type="text" placeholder="Street Address">
                </div>
                <h3 id="payment_title">Payment Method:</h3>
                <div id="paymentOpt">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <input name="radio-choice-h-2" id="credit" value="credit" checked="checked" type="radio">
                        <label for="credit">Credit Card</label>
                        <input name="radio-choice-h-2" id="direct" value="direct" type="radio">
                        <label for="direct">Direct Bill</label>
                    </fieldset>
                </div>
                <div id="creditCard">
                    <input data-clear-btn="true" name="firstName" id="firstName" value="" type="text" placeholder="First Name">
                    <input data-clear-btn="true" name="lastName" id="lastName" value="" type="text" placeholder="Last Name">
                    <input data-clear-btn="true" name="creditNum" id="creditNum" value="" type="tel" placeholder="Credit Card Number">
                    <input data-clear-btn="true" name="securCode" id="securCode" value="" type="tel" placeholder="3 or 4 Digit Security Code">
                    <input data-clear-btn="true" name="zipCode" id="zipCode" value="" type="tel" placeholder="Zip Code">
                    <label><input name="saveAccount" id="saveAccount" class="custom" value="" type="checkbox" data-mini="true">Save my account information</label>                        
                    <input data-clear-btn="true" name="password" id="password" value="" autocomplete="off" type="password" placeholder="Enter Password">
                    <input data-clear-btn="true" name="repassword" id="repassword" value="" autocomplete="off" type="password" placeholder="Re-Enter Password">
                </div>
                <div id="directBill">
                    <input data-clear-btn="true" name="accountNum" id="accountNum" value="" type="tel" placeholder="Account Number">
                </div>
                
                <a id="term_condition" href="#popupParis"  data-role="button" data-theme="b" data-rel="popup" data-position-to="window" data-transition="fade">Terms & Conditions</a>                
                <div data-role="popup" id="popupParis" data-overlay-theme="a" data-theme="d" data-corners="false">
                    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
                    <p>This is Terms and Conditions page area.</p>
                </div>
                <a data-role="button" id="continueBtn" href="#confirmPage" data-theme="b">
                    Book Now
                </a>
            </div>
        </div>
