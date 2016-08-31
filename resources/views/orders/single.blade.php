@extends('layout')
@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mt-0 mb-5">Добавить заказ</h4>
                <ol class="breadcrumb mb-0">
                    <li><a href="#">Umega</a></li>
                    <li><a href="#">E-commerce</a></li>
                    <li class="active">Edit Order</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div class="btn-group mt-5">
                    <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                        <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Edit Order</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-primary"><i class="ti-save"></i></button>
                    <button type="button" class="btn btn-default"><i class="ti-share-alt"></i></button>
                </div>
            </div>
            <div class="widget-body">
                <form class="form-horizontal">
                    <ul role="tablist" class="nav nav-tabs mb-15">
                        <li role="presentation" class="active"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Покупатель</a></li>
                        <li role="presentation"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Товар</a></li>
                        <li role="presentation"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">Оплата</a></li>
                        <li role="presentation"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">Доставка</a></li>
                        <li role="presentation"><a href="#totals" aria-controls="totals" role="tab" data-toggle="tab">Сумма</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="customer" role="tabpanel" class="tab-pane active">
                            <div class="form-group">
                                <label for="txtFirstName" class="col-sm-3 control-label">Имя</label>
                                <div class="col-sm-9">
                                    <input id="txtFirstName" type="text" class="form-control" placeholder="Имя">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtLastName" class="col-sm-3 control-label">Фамилия</label>
                                <div class="col-sm-9">
                                    <input id="txtLastName" type="text" class="form-control" placeholder="Фамилия">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input id="txtEmail" type="text" class="form-control" placeholder='imya@familia.com'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtTelephone" class="col-sm-3 control-label">Телефон</label>
                                <div class="col-sm-9">
                                    <input id="txtTelephone" type="text" class="form-control" placeholder="+77784848484848">
                                </div>
                            </div>
                        </div>
                        <div id="products" role="tabpanel" class="tab-pane">
                            <table style="width: 100%" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Фото</th>
                                    <th>Товар</th>
                                    <th>Артикул</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Статус</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"><img src="/images/products/01.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                                    <td><a href="/admin/products/1">Товар 1</a></td>
                                    <td>Model #20</td>
                                    <td class="text-right">50.00</td>
                                    <td class="text-right">2</td>
                                    <td><span class="label label-success">Enabled</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/02.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                                    <td><a href="/admin/products/2">Товар 2</a></td>
                                    <td>Model #12</td>
                                    <td class="text-right">90.00</td>
                                    <td class="text-right">4</td>
                                    <td><span class="label label-warning">Low stock</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><img src="/images/products/03.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                                    <td><a href="/admin/products/3">Товар 3</a></td>
                                    <td>Model #20</td>
                                    <td class="text-right">20.00</td>
                                    <td class="text-right">1</td>
                                    <td><span class="label label-success">Enabled</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="payment" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <label for="txtFax" class="col-sm-3 control-label">Способ</label>
                                <div class="col-sm-9">
                                    <div class="radio-inline radio-custom">
                                        <input id="rdbCreditCard" type="radio" name="rdbPayment" value="1" checked>
                                        <label for="rdbCreditCard">Кредит</label>
                                    </div>
                                    <div class="radio-inline radio-custom">
                                        <input id="rdbPaypal" type="radio" name="rdbPayment" value="1">
                                        <label for="rdbPaypal">Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtCardNumber" class="col-sm-3 control-label">Номер</label>
                                <div class="col-sm-9">
                                    <input id="txtCardNumber" type="text" class="form-control" placeholder="5984162184961651">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddlExpiryMonth" class="col-sm-3 control-label">Истечение месяца</label>
                                <div class="col-sm-9">
                                    <select id="ddlExpiryMonth" class="form-control">
                                        <option value="01">01 - Янв</option>
                                        <option value="01">01 - Янв</option>
                                        <option value="02">02 - Фев</option>
                                        <option value="03">03 - Мар</option>
                                        <option value="04">04 - Апр</option>
                                        <option value="05">05 - Май</option>
                                        <option value="06">06 - Июн</option>
                                        <option value="07">07 - Июл</option>
                                        <option value="08">08 - Авг</option>
                                        <option value="09">09 - Сен</option>
                                        <option value="10">10 - Окт</option>
                                        <option value="11">11 - Ноя</option>
                                        <option value="12">12 - Дек</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddlExpiryYear" class="col-sm-3 control-label">Истечение года</label>
                                <div class="col-sm-9">
                                    <select id="ddlExpiryYear" class="form-control">
                                        <option value="2023">2023</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSecurityNumber" class="col-sm-3 control-label">Секретный номер</label>
                                <div class="col-sm-9">
                                    <input id="txtSecurityNumber" type="text" class="form-control" placeholder="159">
                                </div>
                            </div>
                        </div>
                        <div id="shipping" role="tabpanel" class="tab-pane">
                            <div class="form-group">
                                <label for="txtStreetAddress" class="col-sm-3 control-label">Улица</label>
                                <div class="col-sm-9">
                                    <input id="txtStreetAddress" type="text" class="form-control"  placeholder="Улица">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddlCountry" class="col-sm-3 control-label">Страна</label>
                                <div class="col-sm-9">
                                    <select id="ddlCountry" class="form-control">
                                        <option value="RU">Россия</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="VG">British Virgin Islands</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos [Keeling] Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo - Brazzaville</option>
                                        <option value="CD">Congo - Kinshasa</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d’Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong SAR China</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau SAR China</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar [Burma]</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="KP">North Korea</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territories</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Islands</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">São Tomé and Príncipe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UM">U.S. Minor Outlying Islands</option>
                                        <option value="VI">U.S. Virgin Islands</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtCity" class="col-sm-3 control-label">Город</label>
                                <div class="col-sm-9">
                                    <input id="txtCity" type="text" class="form-control" placeholder="русский город">
                                </div>
                            </div>
                        </div>
                        <div id="totals" role="tabpanel" class="tab-pane">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:10%">#</th>
                                    <th style="width:40%">Товар</th>
                                    <th style="width:15%">Цена</th>
                                    <th style="width:15%">Количество</th>
                                    <th style="width:20%">Сумма</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Товар 1</td>
                                    <td class="text-right">899.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">899.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Товар 2</td>
                                    <td class="text-right">999.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">999.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Товар 3</td>
                                    <td class="text-right">799.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">799.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Всего</td>
                                    <td class="text-right">2597.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Доставка</td>
                                    <td class="text-right">10.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Общая сумма</td>
                                    <td class="text-right">2607.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop