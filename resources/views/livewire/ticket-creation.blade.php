<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card shadow p-3 rounded border border-0">
                    <div class="card-body row">
                        <div class="col-8">
                            <h5 class="card-title mb-3">
                                Create Ticket Form

                                <p class="card-text text-secondary">Find all tickets on this page and its respective
                                    details.</p>

                            </h5>
                        </div>
                        <div class="col-4">
                            <div class=" d-flex justify-content-end">
                                <div class="center mt-10 mx-2" style="cursor: pointer">
                                    <img id="col_img" class="tw-p-[10px] b-white tw-rounded-[10px] shadow"
                                        src="{{ asset('Vector12.png') }}" alt="mdo" width="45" height="45">
                                </div>
                                <div class="mt-10">
                                    <button wire:click="$dispatch('navigate', {page : 'dashboard'})"
                                        class="btn btn-success  w-px-200"
                                        style="float: right; display: flex; align-items: center; justify-content: center; height: 44px; background: #00a34e;">
                                        <i class="fa fa-plus" style="margin-right: 5px;"></i>
                                        <span style="text-align: center;">Table View</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mb-3">
            <div class=" offset-md-1 col-md-10 col-12">
                <div class="card shadow rounded border border-0">
                    <h5 class="card-header rounded-bottom rounded py-4 text-center text-white"
                        style="background: linear-gradient(to right, #02a34e , #abc959);"> Create New Ticket</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5>General Information</h5>
                                <hr style="color: #00a34e">
                            </div>
                            <div class="col-4 mt-2 text-secondary">
                                <label for="selectPrio" class="form-label">Priority</label>
                                <select name="priority" class="form-select" id="selectPrio">
                                    <option disabled selected>---</option>
                                    <option value="critical">critical</option>
                                    <option value="high">High</option>
                                    <option value="medium">medium</option>
                                    <option value="low">low</option>
                                </select>
                            </div>
                            <div class="col-4 mt-2 text-secondary">
                                <label for="selectCountry" class="form-label">Country</label>
                                <select name="" id="selectCountry" class="form-select">
                                    <option disabled selected>---</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="French Southern and Antarctic Lands">French Southern and Antarctic
                                        Lands</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Saint Barthélemy">Saint Barthélemy</option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
                                        and Tristan da Cunha</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Ivory Coast">Ivory Coast</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="DR Congo">DR Congo</option>
                                    <option value="Republic of the Congo">Republic of the Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaçao">Curaçao</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czechia">Czechia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Finland">Finland</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="France">France</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="India">India</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Saint Martin">Saint Martin</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="North Macedonia">North Macedonia</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Réunion">Réunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="South Georgia">South Georgia</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Eswatini">Eswatini</option>
                                    <option value="Sint Maarten">Sint Maarten</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="United States">United States</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vatican City">Vatican City</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="British Virgin Islands">British Virgin Islands</option>
                                    <option value="United States Virgin Islands">United States Virgin Islands</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                    <option value="Dhekelia">Dhekelia</option>
                                    <option value="Somaliland">Somaliland</option>
                                    <option value="USNB Guantanamo Bay">USNB Guantanamo Bay</option>
                                    <option value="Brazilian I.">Brazilian I.</option>
                                    <option value="N. Cyprus">N. Cyprus</option>
                                    <option value="Cyprus U.N. Buffer Zone">Cyprus U.N. Buffer Zone</option>
                                    <option value="Siachen Glacier">Siachen Glacier</option>
                                    <option value="Baikonur">Baikonur</option>
                                    <option value="Akrotiri">Akrotiri</option>
                                    <option value="Southern Patagonian Ice Field">Southern Patagonian Ice Field
                                    </option>
                                    <option value="Bir Tawil">Bir Tawil</option>
                                    <option value="Indian Ocean Ter.">Indian Ocean Ter.</option>
                                    <option value="Coral Sea Is.">Coral Sea Is.</option>
                                    <option value="Spratly Is.">Spratly Is.</option>
                                    <option value="Clipperton I.">Clipperton I.</option>
                                    <option value="Ashmore and Cartier Is.">Ashmore and Cartier Is.</option>
                                    <option value="Bajo Nuevo Bank">Bajo Nuevo Bank</option>
                                    <option value="Serranilla Bank">Serranilla Bank</option>
                                    <option value="Scarborough Reef">Scarborough Reef</option>
                                    <option value="Europe Union">Europe Union</option>
                                </select>
                            </div>
                            <div class="col-12 mt-5 mb-2">
                                <h5>Ticket Categories</h5>
                                <hr style="color: #00a34e">
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="FirstCat" class="form-label">First Category</label>
                                <select name="" id="FirstCat" class="form-select">
                                    <option disabled selected>---</option>
                                    <option value="idk">inq</option>
                                    <option value="idek">inc</option>
                                </select>
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="SecondCat" class="form-label">Second Category</label>
                                <select name="" id="SecondCat" class="form-select">
                                    <option disabled selected>---</option>
                                    <option value="idk">inq</option>
                                    <option value="idek">inc</option>
                                </select>
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="thirdCat" class="form-label">Third Category</label>
                                <select name="" id="thirdCat" class="form-select">
                                    <option disabled selected>---</option>
                                    <option value="idk">inq</option>
                                    <option value="idek">inc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
