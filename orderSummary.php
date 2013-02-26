        <!-- Order Summary Page -->
        <div data-role="page" id="orderSummary">
            <div data-theme="b" data-role="header">
                <a data-role="button" href="#main_page" class="ui-btn-left">
                    New Trip
                </a>
                <h3>
                    Order Summary
                </h3>
            </div>
            <div data-role="content">
                <div id="total_fare">
                    <div style="width: 150px; height: 70px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8; margin: 0 auto;">
                        <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                    </div>
                    <h3>Total Fare: $64</h3>
                    <span style="color: red;">($5 promo applied)</span>
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
                <h3 id="baggage_title">Baggage</h3>
                <div id="baggage">
                     <h5># of bags (not including carry-ons)</h5>
                     <div id="adultSel">
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
                    </div>
                    <h5>Oversized Bags *Exceeds 50 lbs</h5>
                    <div id="childrenSel">
                        <select name="select-choice-0" id="select-choice-0">
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                        </select>
                    </div>
                    <h5 style="margin-top: 1em; width: 100%;">* Total Dimension Greater than 30 inches</h5>
                    <h5 style="margin-top: 1em; width: 100%;">* Surfboard, golf clubs, skis, etc</h5>
                </div>
                <h3 id="gratuity_title">Gratuity</h3>
                <div id="gratuity">
                    <h3>Total Fare: $64</h3>
                    <h5>Gratuity to Add: (0 for no gratuity)</h5>
                    <div id="money">
                        <span id="mark1">$</span>
                        <input name="" id="input_money" value="" type="text"/>
                    </div>
                    <input type="button" class="percent18" data-theme="b" value="18%">
                    <input type="button" class="percent20" data-theme="b" value="20%">
                </div>
                <a data-role="button" id="continueBtn" href="#customerInfo" data-theme="b">
                    CONTINUE
                </a>
            </div>
        </div>
