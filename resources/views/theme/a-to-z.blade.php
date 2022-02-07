@extends('layouts.master')
@section('content')

    <!-- ----------------------- a-z-index start ----------------------- -->
    <section id="index_part">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-12 d_center">
                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph active" id="pills-a-tab" data-bs-toggle="pill" data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a" aria-selected="true">A</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-b-tab" data-bs-toggle="pill" data-bs-target="#pills-b" type="button" role="tab" aria-controls="pills-b" aria-selected="false">B</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-c-tab" data-bs-toggle="pill" data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c" aria-selected="false">C</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-d-tab" data-bs-toggle="pill" data-bs-target="#pills-d" type="button" role="tab" aria-controls="pills-d" aria-selected="false">D</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-e-tab" data-bs-toggle="pill" data-bs-target="#pills-e" type="button" role="tab" aria-controls="pills-e" aria-selected="false">E</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-f-tab" data-bs-toggle="pill" data-bs-target="#pills-f" type="button" role="tab" aria-controls="pills-f" aria-selected="false">F</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-g-tab" data-bs-toggle="pill" data-bs-target="#pills-g" type="button" role="tab" aria-controls="pills-g" aria-selected="false">G</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-h-tab" data-bs-toggle="pill" data-bs-target="#pills-h" type="button" role="tab" aria-controls="pills-h" aria-selected="false">H</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-i-tab" data-bs-toggle="pill" data-bs-target="#pills-i" type="button" role="tab" aria-controls="pills-i" aria-selected="false">I</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-j-tab" data-bs-toggle="pill" data-bs-target="#pills-j" type="button" role="tab" aria-controls="pills-j" aria-selected="false">J</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-k-tab" data-bs-toggle="pill" data-bs-target="#pills-k" type="button" role="tab" aria-controls="pills-k" aria-selected="false">K</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-l-tab" data-bs-toggle="pill" data-bs-target="#pills-l" type="button" role="tab" aria-controls="pills-l" aria-selected="false">L</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-m-tab" data-bs-toggle="pill" data-bs-target="#pills-m" type="button" role="tab" aria-controls="pills-m" aria-selected="false">M</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-n-tab" data-bs-toggle="pill" data-bs-target="#pills-n" type="button" role="tab" aria-controls="pills-n" aria-selected="false">N</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-o-tab" data-bs-toggle="pill" data-bs-target="#pills-o" type="button" role="tab" aria-controls="pills-o" aria-selected="false">O</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-p-tab" data-bs-toggle="pill" data-bs-target="#pills-p" type="button" role="tab" aria-controls="pills-p" aria-selected="false">P</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-q-tab" data-bs-toggle="pill" data-bs-target="#pills-q" type="button" role="tab" aria-controls="pills-q" aria-selected="false">Q</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-r-tab" data-bs-toggle="pill" data-bs-target="#pills-r" type="button" role="tab" aria-controls="pills-r" aria-selected="false">R</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-s-tab" data-bs-toggle="pill" data-bs-target="#pills-s" type="button" role="tab" aria-controls="pills-s" aria-selected="false">S</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-t-tab" data-bs-toggle="pill" data-bs-target="#pills-t" type="button" role="tab" aria-controls="pills-t" aria-selected="false">T</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-u-tab" data-bs-toggle="pill" data-bs-target="#pills-u" type="button" role="tab" aria-controls="pills-u" aria-selected="false">U</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-v-tab" data-bs-toggle="pill" data-bs-target="#pills-v" type="button" role="tab" aria-controls="pills-v" aria-selected="false">V</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-w-tab" data-bs-toggle="pill" data-bs-target="#pills-w" type="button" role="tab" aria-controls="pills-w" aria-selected="false">W</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-x-tab" data-bs-toggle="pill" data-bs-target="#pills-x" type="button" role="tab" aria-controls="pills-x" aria-selected="false">X</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-y-tab" data-bs-toggle="pill" data-bs-target="#pills-y" type="button" role="tab" aria-controls="pills-y" aria-selected="false">Y</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link paragraph" id="pills-z-tab" data-bs-toggle="pill" data-bs-target="#pills-z" type="button" role="tab" aria-controls="pills-z" aria-selected="false">Z</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-a" role="tabpanel" aria-labelledby="pills-a-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/committee/academic-council" target="_blank" class="paragraph tab_text">Academic Council</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/academic-guidelines" target="_blank" class="paragraph">Academic Guidelines</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/lecture-list" target="_blank" class="paragraph">Academia Lecture Series</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/hostel-facilities" target="_blank" class="paragraph">Accomodation</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/admin/management" target="_blank" class="paragraph">Administration</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/admission" target="_blank" class="paragraph">Admission</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/admission-contact" target="_blank" class="paragraph">Admission Contact</a></li>
                                <li><a href="https://pd.daffodilvarsity.edu.bd/admission/online" target="_blank" class="paragraph">Apply Now</a></li>
                                <li><a href="https://somporka.com/login/" target="_blank" class="paragraph">Alumni</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/apps" class="paragraph">Apps</a></li>
                                <li><a href="http://artofliving.social/" target="_blank" class="paragraph">Art of Living</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/associate-deans-heads" target="_blank" class="paragraph">Associate Deans & Associate Heads</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab">
                            <ul class="no_content">
                                <li><a href="http://blog.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Blog</a></li>
                                <li><a href="https://elearn.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Blended Learning Center (BLC)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/downloads" target="_blank" class="paragraph tab_text">Brand Documents</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/brochure" target="_blank" class="paragraph tab_text">Brochure</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/bba" target="_blank" class="paragraph tab_text">Business Administration</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/committee/board-of-trustees" target="_blank" class="paragraph tab_text">Board of Trustees</a></li>
                                <li><a href="https://dba.daffodilvarsity.edu.bd/bba/" target="_blank" class="paragraph tab_text">Bachelor of Business Administration (BBA)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/bbs" target="_blank" class="paragraph tab_text">Bachelor of Business Studies (BBS)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/bre" target="_blank" class="paragraph tab_text">Bachelor of Real Estate (BRE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/thm" target="_blank" class="paragraph tab_text">Bachelor of Tourism & Hospitality Management (BTHM)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/de" target="_blank" class="paragraph tab_text">Bachelor of Innovation & Entrepreneurship (BE)</a></li>
                                <li><a href="https://cse.daffodilvarsity.edu.bd/program/undergraduate/day-program" target="_blank" class="paragraph tab_text">B.Sc. in Computer Science & Engineering (CSE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/cis" target="_blank" class="paragraph tab_text">B.Sc. in Computing & Information System (CIS)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/swe" target="_blank" class="paragraph tab_text">B.Sc. in Software Engineering (SWE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/esdm" target="_blank" class="paragraph tab_text">B.Sc. in Environmental Science and Disaster Management (ESDM)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/mct" target="_blank" class="paragraph tab_text">B.Sc. in Multimedia & Creative Technology (MCT)</a></li>
                                <li><a href="http://ged.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">B.Sc. in General Educational Development (GED)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/itm" target="_blank" class="paragraph tab_text">B.Sc. in Information Technology & Management (ITM)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/ete" target="_blank" class="paragraph tab_text">B.Sc. in Electronics & Telecommunication Engineering (ETE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/te" target="_blank" class="paragraph tab_text">B.Sc. in Textile Engineering (TE) </a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/eee" target="_blank" class="paragraph tab_text">B.Sc. in Electrical & Electronic Engineering (EEE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/architecture" target="_blank" class="paragraph tab_text">B.Sc. in Architecture (B. Arch)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/ce" target="_blank" class="paragraph tab_text">B.Sc in Civil Engineering</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/pharmacy" target="_blank" class="paragraph tab_text">Bachelor of Pharmacy (Hons)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/nfe" target="_blank" class="paragraph tab_text">B.Sc. in Nutrition & Food Engineering (NFE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/english" target="_blank" class="paragraph tab_text">Bachelor of Arts (Hons) in English</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/law" target="_blank" class="paragraph tab_text">Bachelor of Law (Hons)(LLB)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/jmc" target="_blank" class="paragraph tab_text">BSS (Hons) in Journalism, Media and Communication</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab">
                            <ul class="no_content">
                                <li><a href="http://cdc.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Career Development Center (CDC)</a></li>
                                <li><a href="http://career.daffodilvarsity.edu.bd/?app=home" target="_blank" class="paragraph tab_text">Career at DIU</a></li>
                                <li><a href="http://erp.daffodilvarsity.edu.bd/#/" target="_blank" class="paragraph tab_text">Certificate Verification</a></li>
                                <li><a href="https://convocation.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Convocation</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/coordination-officer" target="_blank" class="paragraph tab_text">Coordination Officers</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/corona" target="_blank" class="paragraph tab_text">COVID-19 Updates</a></li>
                                <li><a href="http://financialaid.daffodilvarsity.edu.bd/diu_cefs/?app=home" target="_blank" class="paragraph tab_text">Chairman Endowment Fund</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/csr-activities" target="_blank" class="paragraph tab_text">CSR Activities</a></li>
                                <li><a href="http://www.campustv.ac/" target="_blank" class="paragraph tab_text">Campus TV</a></li>
                                <li><a href="http://campusradio.ac/" target="_blank" class="paragraph tab_text">Campus Radio</a></li>
                                <li><a href="" target="_blank" class="paragraph tab_text">Complaint Committee to prevent sexual harassment</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/committee/committees" target="_blank" class="paragraph tab_text">Committees</a></li>
                                <li><a href="http://dsa.daffodilvarsity.edu.bd/index.php/diu-clubs" target="_blank" class="paragraph tab_text">Clubs</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/credit-transfer" target="_blank" class="paragraph tab_text">Credit Transfer Guidelines</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-d-tab">
                            <ul class="no_content">
                                <li><a href="http://financialaid.daffodilvarsity.edu.bd/diu_dhcs/?app=home" target="_blank" class="paragraph tab_text">Delwar Hussain Chowdhury Scholarship for Students welfare</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/deans-heads" target="_blank" class="paragraph tab_text">Deans & Heads</a></li>
                                <li><a href="http://research.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Division of Research</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/daycare" target="_blank" class="paragraph tab_text">Daffodil Angel’s Day Care</a></li>
                                <li><a href="http://dil.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Daffodil Institute of Languages (DIL)</a></li>
                                <li><a href="http://diss.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Daffodil Institute of Social Sciences (DISS)</a></li>
                                <li><a href="https://ic.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Daffodil Islamic Center</a></li>
                                <li><a href="http://dsa.daffodilvarsity.edu.bd/index.php/diu-clubs" target="_blank" class="paragraph tab_text">DIU Clubs</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-e" role="tabpanel" aria-labelledby="pills-e-tab">
                            <ul class="no_content">
                                <li><a href="http://employability.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Employability 360</a></li>
                                <li><a href="http://dsa.daffodilvarsity.edu.bd/index.php/e-newsletter" target="_blank" class="paragraph tab_text">E-Newsletter</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/erp" target="_blank" class="paragraph tab_text">ERP</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-f" role="tabpanel" aria-labelledby="pills-f-tab">
                            <ul class="no_content">
                                <li><a href="http://financialaid.daffodilvarsity.edu.bd/?app=home" target="_blank" class="paragraph tab_text">Financial Aid & Scholarships</a></li>
                                <li><a href="https://forum.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Forum</a></li>
                                <li><a href="https://faculty.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Faculty Members</a></li>
                                <li><a href="https://www.facebook.com/daffodilvarsity.edu.bd" target="_blank" class="paragraph tab_text">Facebook</a></li>
                                <li><a href="https://fd.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Foundation Day</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-g" role="tabpanel" aria-labelledby="pills-g-tab">
                            <ul class="no_content">
                                <li><a href="https://goedu.ac/" target="_blank" class="paragraph tab_text">GoEdu</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/guidelines-for-guardians" target="_blank" class="paragraph tab_text">Guidelines for Guardians</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/gymnasium" target="_blank" class="paragraph tab_text">Gymnasium</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/green-campus" target="_blank" class="paragraph tab_text">Green Campus</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-h" role="tabpanel" aria-labelledby="pills-h-tab">
                            <ul class="no_content">
                                <li><a href="http://hrdinstitute.org/" target="_blank" class="paragraph tab_text">HRDI</a></li>
                                <li><a href="https://hall.daffodilvarsity.edu.bd/page/guidelines" target="_blank" class="paragraph tab_text">Hall Portal</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/history" target="_blank" class="paragraph tab_text">History of DIU</a></li>
                                <li><a href="https://pd.daffodilvarsity.edu.bd/support_ticket" target="_blank" class="paragraph tab_text">Help Desk</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/admission-contact" target="_blank" class="paragraph tab_text">Helpline</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-i" role="tabpanel" aria-labelledby="pills-i-tab">
                            <ul class="no_content">
                                <li><a href="https://www.instagram.com/daffodil.university/" target="_blank" class="paragraph tab_text">Instagram</a></li>
                                <li><a href="http://internship.daffodilvarsity.edu.bd/?app=home" target="_blank" class="paragraph tab_text">Internship Portal</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/international/international-contact" target="_blank" class="paragraph tab_text">International Affairs & Admission</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/international/international-alumni" target="_blank" class="paragraph tab_text">International Alumni</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/int-tuition-fees" target="_blank" class="paragraph tab_text">International Tuition Fees</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" target="_blank" class="paragraph tab_text">International Scholarships</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/mps/members" target="_blank" class="paragraph tab_text">International Memberships</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/international-linkage" target="_blank" class="paragraph tab_text">International Linkages</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/international-conferences" target="_blank" class="paragraph tab_text">International Conferences</a></li>
                                <li><a href="https://isbsp.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">ISBSP</a></li>
                                <li><a href="http://iqac.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">IQAC</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-j" role="tabpanel" aria-labelledby="pills-j-tab">
                            <ul class="no_content">
                                <li><a href="https://diujahs.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Journal of Allied Health Sciences</a></li>
                                <li><a href="http://diujbe.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Journal of Business & Entrepreneurship</a></li>
                                <li><a href="http://diujhss.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Journal of Humanities & Social Sciences</a></li>
                                <li><a href="http://diujst.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Journal of Science & Technology</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-k" role="tabpanel" aria-labelledby="pills-k-tab">
                            <p class="no_content paragraph"> Sorry, nothing found!</p>
                        </div>

                        <div class="tab-pane fade" id="pills-l" role="tabpanel" aria-labelledby="pills-l-tab">
                            <ul class="no_content">
                                <li><a href="http://library.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Library</a></li>
                                <li><a href="https://www.linkedin.com/school/daffodil-international-university/mycompany/verification/" target="_blank" class="paragraph tab_text">LinkedIn</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-m" role="tabpanel" aria-labelledby="pills-m-tab">
                            <ul class="no_content">
                                <li><a href="http://financialaid.daffodilvarsity.edu.bd/diu_mums/?app=home" target="_blank" class="paragraph tab_text">Mofiz Uddin Majumder Scholarship Fund</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/committee/management-personnel" target="_blank" class="paragraph tab_text">Management Committee</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/bba" target="_blank" class="paragraph tab_text">Master of Business Administration (MBA)(Regular)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/bba" target="_blank" class="paragraph tab_text">Master of Business Administration (MBA)(Executive)</a></li>
                                <li><a href="https://cse.daffodilvarsity.edu.bd/program/graduate/m-sc-in-cse" target="_blank" class="paragraph tab_text">M.Sc. in Computer Science & Engineering (CSE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/cse" target="_blank" class="paragraph tab_text">M.Sc.in Management Information System (MIS)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/swe" target="_blank" class="paragraph tab_text">M.Sc. in Software Engineering (SWE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/ete" target="_blank" class="paragraph tab_text">M.Sc. in Electronics & Telecommunication Engineering (ETE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/te" target="_blank" class="paragraph tab_text">M.Sc. in Textile Engineering (TE)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/ph" target="_blank" class="paragraph tab_text">Master of Public Health (MPH)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/pharmacy" target="_blank" class="paragraph tab_text">Master of Pharmacy</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/english" target="_blank" class="paragraph tab_text">Master of Arts in English</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/law" target="_blank" class="paragraph tab_text">Master of Law (LLM)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/jmc" target="_blank" class="paragraph tab_text">MSS in Journalism, Media and Communication</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/department/mds" target="_blank" class="paragraph tab_text">MSS in Development Studies</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-n" role="tabpanel" aria-labelledby="pills-n-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/noticeboard" target="_blank" class="paragraph tab_text">Notice Board</a></li>
                                <li><a href="https://nrda.daffodil.family/" target="_blank" class="paragraph tab_text">Non Residential Daffodil Alumni</a></li>
                                <li><a href="http://news.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">News</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-o" role="tabpanel" aria-labelledby="pills-o-tab">
                            <ul class="no_content">
                                <li><a href="https://laptop.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">One Student One Laptop</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-p" role="tabpanel" aria-labelledby="pills-p-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/department/islm" target="_blank" class="paragraph tab_text">Post Graduate Diploma in Information Science and Library Management</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/pc-purchase-schemes" target="_blank" class="paragraph tab_text">PC Purchase Scheme</a></li>
                                <li><a href="https://www.pinterest.com/daffodilvarsity/_saved/" target="_blank" class="paragraph tab_text">Pinterest</a></li>
                                <li><a href="http://dsa.daffodilvarsity.edu.bd/index.php/introduction" target="_blank" class="paragraph tab_text">Psychological Service Center</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/prospectus" target="_blank" class="paragraph tab_text">Prospectus</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-q" role="tabpanel" aria-labelledby="pills-q-tab">
                            <p class="no_content paragraph"> Sorry, nothing found!</p>
                        </div>

                        <div class="tab-pane fade" id="pills-r" role="tabpanel" aria-labelledby="pills-r-tab">
                            <ul class="no_content">
                                <li><a href="https://hall.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Rowshan Ara Scholar Garden</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/research-projects" target="_blank" class="paragraph tab_text">Research Projects</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/ranking" target="_blank" class="paragraph tab_text">Rankings</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-s" role="tabpanel" aria-labelledby="pills-s-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/staff/Attendant" target="_blank" class="paragraph tab_text">Supporting Staff</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/committee/syndicate" target="_blank" class="paragraph tab_text">Syndicate Committee</a></li>
                                <li><a href="http://dsa.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Students’ Affairs</a></li>
                                <li><a href="http://studentportal.diu.edu.bd/#/login" target="_blank" class="paragraph tab_text">Student Portal</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/sports/sports" target="_blank" class="paragraph tab_text">Sports Activities</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-t" role="tabpanel" aria-labelledby="pills-t-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/article/transport" target="_blank" class="paragraph tab_text">Transport</a></li>
                                <li><a href="https://talenthunt.daffodilvarsity.edu.bd/?app=home" target="_blank" class="paragraph tab_text">Talent Hunt Scholarship</a></li>
                                <li><a href="https://twitter.com/daffodilvarsity" target="_blank" class="paragraph tab_text">Twitter</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-u" role="tabpanel" aria-labelledby="pills-u-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/article/programs" target="_blank" class="paragraph tab_text">Undergraduate Programs</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/ranking" target="_blank" class="paragraph tab_text">University Rankings</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-v" role="tabpanel" aria-labelledby="pills-v-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/virtual-tour" target="_blank" class="paragraph tab_text">Virtual Tour</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/visiting-professors" target="_blank" class="paragraph tab_text">Visiting Faculty Members</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/article/valued-employers" target="_blank" class="paragraph tab_text">Valued Employers</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-w" role="tabpanel" aria-labelledby="pills-w-tab">
                            <ul class="no_content">
                                <li><a href="https://daffodilvarsity.edu.bd/master" target="_blank" class="paragraph tab_text">Waiver Calculator (Master’s program)</a></li>
                                <li><a href="https://daffodilvarsity.edu.bd/undergraduate" target="_blank" class="paragraph tab_text">Waiver Calculator (Undergraduate program)</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-x" role="tabpanel" aria-labelledby="pills-x-tab">
                            <p class="no_content paragraph"> Sorry, nothing found!</p>
                        </div>

                        <div class="tab-pane fade" id="pills-y" role="tabpanel" aria-labelledby="pills-y-tab">
                            <ul class="no_content">
                                <li><a href="https://hall.daffodilvarsity.edu.bd/" target="_blank" class="paragraph tab_text">Younus Khan Scholar Garden</a></li>
                                <li><a href="https://www.youtube.com/user/webmasterdiu" target="_blank" class="paragraph tab_text">YouTube</a></li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="pills-z" role="tabpanel" aria-labelledby="pills-z-tab">
                            <p class="no_content paragraph"> Sorry, nothing found!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- a-z-index end ----------------------- -->


@endsection
