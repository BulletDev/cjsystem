@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8 pt-4">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Contestant</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('contestants.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <h4>Personal Information</h4>
                            <hr class="separator">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="contestant_no">Contestant Number</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="contestant_no" id="contestant_no">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="first_name">First Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="middle_name">Middle Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter Middle Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="last_name">Last Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="gender">Gender</label>
                                <div class="col-sm-8">
                                <select class="form-control" name="gender" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="age">Age</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="age" id="age" min="1" max="150">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="nationality">Nationality</label>
                                <div class="col-sm-8">
                                <select class="form-control" name="nationality" id="nationality">
                                    <option value="">-- select one --</option>
                                    <option value="afghan">Afghan</option>
                                    <option value="albanian">Albanian</option>
                                    <option value="algerian">Algerian</option>
                                    <option value="american">American</option>
                                    <option value="andorran">Andorran</option>
                                    <option value="angolan">Angolan</option>
                                    <option value="antiguans">Antiguans</option>
                                    <option value="argentinean">Argentinean</option>
                                    <option value="armenian">Armenian</option>
                                    <option value="australian">Australian</option>
                                    <option value="austrian">Austrian</option>
                                    <option value="azerbaijani">Azerbaijani</option>
                                    <option value="bahamian">Bahamian</option>
                                    <option value="bahraini">Bahraini</option>
                                    <option value="bangladeshi">Bangladeshi</option>
                                    <option value="barbadian">Barbadian</option>
                                    <option value="barbudans">Barbudans</option>
                                    <option value="batswana">Batswana</option>
                                    <option value="belarusian">Belarusian</option>
                                    <option value="belgian">Belgian</option>
                                    <option value="belizean">Belizean</option>
                                    <option value="beninese">Beninese</option>
                                    <option value="bhutanese">Bhutanese</option>
                                    <option value="bolivian">Bolivian</option>
                                    <option value="bosnian">Bosnian</option>
                                    <option value="brazilian">Brazilian</option>
                                    <option value="british">British</option>
                                    <option value="bruneian">Bruneian</option>
                                    <option value="bulgarian">Bulgarian</option>
                                    <option value="burkinabe">Burkinabe</option>
                                    <option value="burmese">Burmese</option>
                                    <option value="burundian">Burundian</option>
                                    <option value="cambodian">Cambodian</option>
                                    <option value="cameroonian">Cameroonian</option>
                                    <option value="canadian">Canadian</option>
                                    <option value="cape verdean">Cape Verdean</option>
                                    <option value="central african">Central African</option>
                                    <option value="chadian">Chadian</option>
                                    <option value="chilean">Chilean</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="colombian">Colombian</option>
                                    <option value="comoran">Comoran</option>
                                    <option value="congolese">Congolese</option>
                                    <option value="costa rican">Costa Rican</option>
                                    <option value="croatian">Croatian</option>
                                    <option value="cuban">Cuban</option>
                                    <option value="cypriot">Cypriot</option>
                                    <option value="czech">Czech</option>
                                    <option value="danish">Danish</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="dominican">Dominican</option>
                                    <option value="dutch">Dutch</option>
                                    <option value="east timorese">East Timorese</option>
                                    <option value="ecuadorean">Ecuadorean</option>
                                    <option value="egyptian">Egyptian</option>
                                    <option value="emirian">Emirian</option>
                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                    <option value="eritrean">Eritrean</option>
                                    <option value="estonian">Estonian</option>
                                    <option value="ethiopian">Ethiopian</option>
                                    <option value="fijian">Fijian</option>
                                    <option value="filipino">Filipino</option>
                                    <option value="finnish">Finnish</option>
                                    <option value="french">French</option>
                                    <option value="gabonese">Gabonese</option>
                                    <option value="gambian">Gambian</option>
                                    <option value="georgian">Georgian</option>
                                    <option value="german">German</option>
                                    <option value="ghanaian">Ghanaian</option>
                                    <option value="greek">Greek</option>
                                    <option value="grenadian">Grenadian</option>
                                    <option value="guatemalan">Guatemalan</option>
                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                    <option value="guinean">Guinean</option>
                                    <option value="guyanese">Guyanese</option>
                                    <option value="haitian">Haitian</option>
                                    <option value="herzegovinian">Herzegovinian</option>
                                    <option value="honduran">Honduran</option>
                                    <option value="hungarian">Hungarian</option>
                                    <option value="icelander">Icelander</option>
                                    <option value="indian">Indian</option>
                                    <option value="indonesian">Indonesian</option>
                                    <option value="iranian">Iranian</option>
                                    <option value="iraqi">Iraqi</option>
                                    <option value="irish">Irish</option>
                                    <option value="israeli">Israeli</option>
                                    <option value="italian">Italian</option>
                                    <option value="ivorian">Ivorian</option>
                                    <option value="jamaican">Jamaican</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="jordanian">Jordanian</option>
                                    <option value="kazakhstani">Kazakhstani</option>
                                    <option value="kenyan">Kenyan</option>
                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                    <option value="kuwaiti">Kuwaiti</option>
                                    <option value="kyrgyz">Kyrgyz</option>
                                    <option value="laotian">Laotian</option>
                                    <option value="latvian">Latvian</option>
                                    <option value="lebanese">Lebanese</option>
                                    <option value="liberian">Liberian</option>
                                    <option value="libyan">Libyan</option>
                                    <option value="liechtensteiner">Liechtensteiner</option>
                                    <option value="lithuanian">Lithuanian</option>
                                    <option value="luxembourger">Luxembourger</option>
                                    <option value="macedonian">Macedonian</option>
                                    <option value="malagasy">Malagasy</option>
                                    <option value="malawian">Malawian</option>
                                    <option value="malaysian">Malaysian</option>
                                    <option value="maldivan">Maldivan</option>
                                    <option value="malian">Malian</option>
                                    <option value="maltese">Maltese</option>
                                    <option value="marshallese">Marshallese</option>
                                    <option value="mauritanian">Mauritanian</option>
                                    <option value="mauritian">Mauritian</option>
                                    <option value="mexican">Mexican</option>
                                    <option value="micronesian">Micronesian</option>
                                    <option value="moldovan">Moldovan</option>
                                    <option value="monacan">Monacan</option>
                                    <option value="mongolian">Mongolian</option>
                                    <option value="moroccan">Moroccan</option>
                                    <option value="mosotho">Mosotho</option>
                                    <option value="motswana">Motswana</option>
                                    <option value="mozambican">Mozambican</option>
                                    <option value="namibian">Namibian</option>
                                    <option value="nauruan">Nauruan</option>
                                    <option value="nepalese">Nepalese</option>
                                    <option value="new zealander">New Zealander</option>
                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                    <option value="nicaraguan">Nicaraguan</option>
                                    <option value="nigerien">Nigerien</option>
                                    <option value="north korean">North Korean</option>
                                    <option value="northern irish">Northern Irish</option>
                                    <option value="norwegian">Norwegian</option>
                                    <option value="omani">Omani</option>
                                    <option value="pakistani">Pakistani</option>
                                    <option value="palauan">Palauan</option>
                                    <option value="panamanian">Panamanian</option>
                                    <option value="papua new guinean">Papua New Guinean</option>
                                    <option value="paraguayan">Paraguayan</option>
                                    <option value="peruvian">Peruvian</option>
                                    <option value="polish">Polish</option>
                                    <option value="portuguese">Portuguese</option>
                                    <option value="qatari">Qatari</option>
                                    <option value="romanian">Romanian</option>
                                    <option value="russian">Russian</option>
                                    <option value="rwandan">Rwandan</option>
                                    <option value="saint lucian">Saint Lucian</option>
                                    <option value="salvadoran">Salvadoran</option>
                                    <option value="samoan">Samoan</option>
                                    <option value="san marinese">San Marinese</option>
                                    <option value="sao tomean">Sao Tomean</option>
                                    <option value="saudi">Saudi</option>
                                    <option value="scottish">Scottish</option>
                                    <option value="senegalese">Senegalese</option>
                                    <option value="serbian">Serbian</option>
                                    <option value="seychellois">Seychellois</option>
                                    <option value="sierra leonean">Sierra Leonean</option>
                                    <option value="singaporean">Singaporean</option>
                                    <option value="slovakian">Slovakian</option>
                                    <option value="slovenian">Slovenian</option>
                                    <option value="solomon islander">Solomon Islander</option>
                                    <option value="somali">Somali</option>
                                    <option value="south african">South African</option>
                                    <option value="south korean">South Korean</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="sri lankan">Sri Lankan</option>
                                    <option value="sudanese">Sudanese</option>
                                    <option value="surinamer">Surinamer</option>
                                    <option value="swazi">Swazi</option>
                                    <option value="swedish">Swedish</option>
                                    <option value="swiss">Swiss</option>
                                    <option value="syrian">Syrian</option>
                                    <option value="taiwanese">Taiwanese</option>
                                    <option value="tajik">Tajik</option>
                                    <option value="tanzanian">Tanzanian</option>
                                    <option value="thai">Thai</option>
                                    <option value="togolese">Togolese</option>
                                    <option value="tongan">Tongan</option>
                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="tunisian">Tunisian</option>
                                    <option value="turkish">Turkish</option>
                                    <option value="tuvaluan">Tuvaluan</option>
                                    <option value="ugandan">Ugandan</option>
                                    <option value="ukrainian">Ukrainian</option>
                                    <option value="uruguayan">Uruguayan</option>
                                    <option value="uzbekistani">Uzbekistani</option>
                                    <option value="venezuelan">Venezuelan</option>
                                    <option value="vietnamese">Vietnamese</option>
                                    <option value="welsh">Welsh</option>
                                    <option value="yemenite">Yemenite</option>
                                    <option value="zambian">Zambian</option>
                                    <option value="zimbabwean">Zimbabwean</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="photo">Photo</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/*">
                                            <label class="custom-file-label" for="photo">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="separator">
                            <h4>Educational Attainment</h4>
                            <hr class="separator">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="attainment">Degree</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="attainment" id="attainment" placeholder="Enter Degree">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="school">School</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="school" id="school" placeholder="Enter School">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="course">Course</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="course" id="course" placeholder="Enter Course">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="year">Year</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="year" id="year" min="1900" max="2099" step="1" value="2020">
                                </div>
                            </div>

                            <hr class="separator">
                            <h4>Other Information</h4>
                            <hr class="separator">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="weight">Weight (lbs)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="weight" id="weight" value="150">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="height">Height (cm)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="height" id="height" value="180">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="biography">Biography</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="biography" id="biography" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <hr class="separator">
                            <h4>Vital Statistics</h4>
                            <hr class="separator">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="bust_line">Bust Line (inches)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="bust_line" id="bust_line" value="39">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="waist_line">Waist Line (inches)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="waist_line" id="waist_line" value="25">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="hip_line">Hip Line (inches)</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" name="hip_line" id="hip_line" value="36">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection