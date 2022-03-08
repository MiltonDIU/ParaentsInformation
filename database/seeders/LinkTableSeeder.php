<?php

namespace Database\Seeders;

use App\Models\LinkCategory;
use Illuminate\Database\Seeder;
use App\Models\Link;
class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $links = [
//            [
//                'title' => 'Academic Council',
//                'link' => 'https://daffodilvarsity.edu.bd/committee/academic-council',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Academic Guidelines',
//                'link' => 'https://daffodilvarsity.edu.bd/article/academic-guidelines',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Academia Lecture Series',
//                'link' => 'https://daffodilvarsity.edu.bd/lecture-list',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Accommodation',
//                'link' => 'https://daffodilvarsity.edu.bd/article/hostel-facilities',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Administration',
//                'link' => 'https://daffodilvarsity.edu.bd/admin/management',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Admission',
//                'link' => 'https://daffodilvarsity.edu.bd/admission',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Admission Contact',
//                'link' => 'https://daffodilvarsity.edu.bd/article/admission-contact',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Apply Now',
//                'link' => 'https://pd.daffodilvarsity.edu.bd/admission/online',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Alumni',
//                'link' => 'https://somporka.com/login/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Apps',
//                'link' => 'https://daffodilvarsity.edu.bd/article/apps',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Art of Living',
//                'link' => 'http://artofliving.social/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Associate Deans & Associate Heads',
//                'link' => 'https://daffodilvarsity.edu.bd/article/associate-deans-heads',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Blog',
//                'link' => 'http://blog.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Blended Learning Center (BLC)',
//                'link' => 'https://elearn.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Brand Documents',
//                'link' => 'https://daffodilvarsity.edu.bd/article/downloads',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Brochure',
//                'link' => 'https://daffodilvarsity.edu.bd/article/brochure',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Business Administration',
//                'link' => 'https://daffodilvarsity.edu.bd/department/bba',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Board of Trustees',
//                'link' => 'https://daffodilvarsity.edu.bd/committee/board-of-trustees',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Business Administration (BBA)',
//                'link' => 'https://dba.daffodilvarsity.edu.bd/bba/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Business Studies (BBS)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/bbs',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Real Estate (BRE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/bre',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Tourism & Hospitality Management (BTHM)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/thm',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Innovation & Entrepreneurship (BE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/de',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Computer Science & Engineering (CSE)',
//                'link' => 'https://cse.daffodilvarsity.edu.bd/program/undergraduate/day-program',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Computing & Information System (CIS)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/cis',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Software Engineering (SWE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/swe',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Environmental Science and Disaster Management (ESDM)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/esdm',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Multimedia & Creative Technology (MCT)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/mct',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in General Educational Development (GED)',
//                'link' => 'http://ged.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Information Technology & Management (ITM)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/itm',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Electronics & Telecommunication Engineering (ETE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/ete',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Textile Engineering (TE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/te',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Electrical & Electronic Engineering (EEE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/eee',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc. in Architecture (B. Arch)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/architecture',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'B.Sc in Civil Engineering',
//                'link' => 'https://daffodilvarsity.edu.bd/department/ce',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Pharmacy (Hons)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/pharmacy',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'B.Sc. in Nutrition & Food Engineering (NFE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/nfe',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Arts (Hons) in English',
//                'link' => 'https://daffodilvarsity.edu.bd/department/english',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Bachelor of Law (Hons)(LLB)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/law',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'BSS (Hons) in Journalism, Media and Communication',
//                'link' => 'https://daffodilvarsity.edu.bd/department/jmc',
//                'is_active' => 1,
//            ],
//            [
//                'title' => 'Career Development Center (CDC)',
//                'link' => 'http://cdc.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Career at DIU',
//                'link' => 'http://career.daffodilvarsity.edu.bd/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Certificate Verification',
//                'link' => 'http://erp.daffodilvarsity.edu.bd/#/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Convocation',
//                'link' => 'https://convocation.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Coordination Officers',
//                'link' => 'https://daffodilvarsity.edu.bd/coordination-officer',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'COVID-19 Updates',
//                'link' => 'https://daffodilvarsity.edu.bd/article/corona',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Chairman Endowment Fund',
//                'link' => 'http://financialaid.daffodilvarsity.edu.bd/diu_cefs/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'CSR Activities',
//                'link' => 'https://daffodilvarsity.edu.bd/csr-activities',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Campus TV',
//                'link' => 'http://www.campustv.ac/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Campus Radio',
//                'link' => 'http://campusradio.ac/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Complaint Committee to prevent sexual harassment',
//                'link' => '#',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Committees',
//                'link' => 'https://daffodilvarsity.edu.bd/committee/committees',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Clubs',
//                'link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/diu-clubs',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Credit Transfer Guidelines',
//                'link' => 'https://daffodilvarsity.edu.bd/article/credit-transfer',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Delwar Hussain Chowdhury Scholarship for Students welfare',
//                'link' => 'http://financialaid.daffodilvarsity.edu.bd/diu_dhcs/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Deans & Heads',
//                'link' => 'https://daffodilvarsity.edu.bd/article/deans-heads',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Division of Research',
//                'link' => 'http://research.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Daffodil Angel’s Day Care',
//                'link' => 'https://daffodilvarsity.edu.bd/daycare',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Daffodil Institute of Languages (DIL)',
//                'link' => 'http://dil.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Daffodil Institute of Social Sciences (DISS)',
//                'link' => 'http://diss.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Daffodil Islamic Center',
//                'link' => 'https://ic.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'DIU Clubs',
//                'link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/diu-clubs',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Employability 360',
//                'link' => 'http://employability.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'E-Newsletter',
//                'link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/e-newsletter',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'ERP',
//                'link' => 'https://daffodilvarsity.edu.bd/article/erp',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Financial Aid & Scholarships',
//                'link' => 'http://financialaid.daffodilvarsity.edu.bd/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Forum',
//                'link' => 'https://forum.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Faculty Members',
//                'link' => 'https://faculty.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Facebook',
//                'link' => 'https://www.facebook.com/daffodilvarsity.edu.bd',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Foundation Day',
//                'link' => 'https://fd.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'GoEdu',
//                'link' => 'https://goedu.ac/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Guidelines for Guardians',
//                'link' => 'https://daffodilvarsity.edu.bd/article/guidelines-for-guardians',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Gymnasium',
//                'link' => 'https://daffodilvarsity.edu.bd/article/gymnasium',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Green Campus',
//                'link' => 'https://daffodilvarsity.edu.bd/article/green-campus',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'HRDI',
//                'link' => 'http://hrdinstitute.org/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Hall Portal',
//                'link' => 'https://hall.daffodilvarsity.edu.bd/page/guidelines',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'History of DIU',
//                'link' => 'https://daffodilvarsity.edu.bd/article/history',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Help Desk',
//                'link' => 'https://pd.daffodilvarsity.edu.bd/support_ticket',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Helpline',
//                'link' => 'https://daffodilvarsity.edu.bd/article/admission-contact',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Instagram',
//                'link' => 'https://www.instagram.com/daffodil.university/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Internship Portal',
//                'link' => 'http://internship.daffodilvarsity.edu.bd/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Affairs & Admission',
//                'link' => 'https://daffodilvarsity.edu.bd/international/international-contact',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Alumni',
//                'link' => 'https://daffodilvarsity.edu.bd/international/international-alumni',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Tuition Fees',
//                'link' => 'https://daffodilvarsity.edu.bd/int-tuition-fees',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Scholarships',
//                'link' => 'https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Memberships',
//                'link' => 'https://daffodilvarsity.edu.bd/mps/members',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Linkages',
//                'link' => 'https://daffodilvarsity.edu.bd/international-linkage',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'International Conferences',
//                'link' => 'https://daffodilvarsity.edu.bd/international-conferences',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'ISBSP',
//                'link' => 'https://isbsp.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'IQAC',
//                'link' => 'http://iqac.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Journal of Allied Health Sciences',
//                'link' => 'https://diujahs.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Journal of Business & Entrepreneurship',
//                'link' => 'http://diujbe.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Journal of Humanities & Social Sciences',
//                'link' => 'http://diujhss.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Journal of Science & Technology',
//                'link' => 'http://diujst.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Library',
//                'link' => 'http://library.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'LinkedIn',
//                'link' => 'https://www.linkedin.com/school/daffodil-international-university/mycompany/verification/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Mofiz Uddin Majumder Scholarship Fund',
//                'link' => 'http://financialaid.daffodilvarsity.edu.bd/diu_mums/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Management Committee',
//                'link' => 'https://daffodilvarsity.edu.bd/committee/management-personnel',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Business Administration (MBA)(Regular)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/bba',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Business Administration (MBA)(Executive)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/bba',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'M.Sc. in Computer Science & Engineering (CSE)',
//                'link' => 'https://cse.daffodilvarsity.edu.bd/program/graduate/m-sc-in-cse',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'M.Sc.in Management Information System (MIS)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/cse',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'M.Sc. in Software Engineering (SWE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/swe',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'M.Sc. in Electronics & Telecommunication Engineering',
//                'link' => 'https://daffodilvarsity.edu.bd/department/ete',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'M.Sc. in Textile Engineering (TE)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/te',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Public Health (MPH)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/ph',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Pharmacy',
//                'link' => 'https://daffodilvarsity.edu.bd/department/pharmacy',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Arts in English',
//                'link' => 'https://daffodilvarsity.edu.bd/department/english',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Master of Law (LLM)',
//                'link' => 'https://daffodilvarsity.edu.bd/department/law',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'MSS in Development Studies',
//                'link' => 'https://daffodilvarsity.edu.bd/department/mds',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Notice Board',
//                'link' => 'https://daffodilvarsity.edu.bd/noticeboard',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Non Residential Daffodil Alumni',
//                'link' => 'https://nrda.daffodil.family/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'One Student One Laptop',
//                'link' => 'https://laptop.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Post Graduate Diploma in Information Science and Library Management',
//                'link' => 'https://daffodilvarsity.edu.bd/department/islm',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'PC Purchase Scheme',
//                'link' => 'https://daffodilvarsity.edu.bd/article/pc-purchase-schemes',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Pinterest',
//                'link' => 'https://www.pinterest.com/daffodilvarsity/_saved/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Psychological Service Center',
//                'link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/introduction',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Prospectus',
//                'link' => 'https://daffodilvarsity.edu.bd/prospectus',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Rowshan Ara Scholar Garden',
//                'link' => 'https://hall.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Research Projects',
//                'link' => 'https://daffodilvarsity.edu.bd/article/research-projects',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Rankings',
//                'link' => 'https://daffodilvarsity.edu.bd/article/ranking',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Supporting Staff',
//                'link' => 'https://daffodilvarsity.edu.bd/staff/Attendant',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Syndicate Committee',
//                'link' => 'https://daffodilvarsity.edu.bd/committee/syndicate',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Students’ Affairs',
//                'link' => 'http://dsa.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Student Portal',
//                'link' => 'http://studentportal.diu.edu.bd/#/login',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Sports Activities',
//                'link' => 'https://daffodilvarsity.edu.bd/sports/sports',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Transport',
//                'link' => 'https://daffodilvarsity.edu.bd/article/transport',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Talent Hunt Scholarship',
//                'link' => 'https://talenthunt.daffodilvarsity.edu.bd/?app=home',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Twitter',
//                'link' => 'https://twitter.com/daffodilvarsity',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Undergraduate Programs',
//                'link' => 'https://daffodilvarsity.edu.bd/article/programs',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'University Rankings',
//                'link' => 'https://daffodilvarsity.edu.bd/article/ranking',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Virtual Tour',
//                'link' => 'https://daffodilvarsity.edu.bd/virtual-tour',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Visiting Faculty Members',
//                'link' => 'https://daffodilvarsity.edu.bd/article/visiting-professors',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Valued Employers',
//                'link' => 'https://daffodilvarsity.edu.bd/article/valued-employers',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Waiver Calculator (Master’s program)',
//                'link' => 'https://daffodilvarsity.edu.bd/master',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Waiver Calculator (Undergraduate program)',
//                'link' => 'https://daffodilvarsity.edu.bd/undergraduate',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'Younus Khan Scholar Garden',
//                'link' => 'https://hall.daffodilvarsity.edu.bd/',
//                'is_active' => 1,
//            ],
//
//            [
//                'title' => 'YouTube',
//                'link' => 'https://www.youtube.com/user/webmasterdiu',
//                'is_active' => 1,
//            ],
//        ];
//        foreach ($links as $link) {
//            $linkData = Link::create($link);
//            $linkData->link_categories()->sync(12);
//        }
        $links = [
            [
                'title' => 'Announcement Title 1',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Announcement Title 2',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Announcement Title 3',
                'link' => '#',
                'is_active' => 1,
            ]
        ];

        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(1);
        }
        $links = [
            [
                'title' => 'Safety Measures',
                'link' => 'https://daffodilvarsity.edu.bd/article/safety-measures-of-daffodil-international-university',
                'is_active' => 1,
            ],

            [
                'title' => 'Security Policy',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Fire safety policy',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Parking and traffic policy',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'DIU Student Handbook',
                'link' => '#',
                'is_active' => 1,
            ],

        ];
        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(7);
        }
        $links = [

            [
                'title' => 'Financial Aid & Scholarship',
                'link' => 'http://financialaid.daffodilvarsity.edu.bd/?app=home',
                'is_active' => 1,
            ],
            [
                'title' => 'Office of the Registrar',
                'link' => 'https://daffodilvarsity.edu.bd/registrar-office/registrar-office-introduction',
                'is_active' => 1,
            ],
            [
                'title' => 'Admission Office',
                'link' => 'https://daffodilvarsity.edu.bd/admission-contact',
                'is_active' => 1,
            ],
            [
                'title' => 'Department Coordination Offices',
                'link' => 'https://daffodilvarsity.edu.bd/coordination-officer',
                'is_active' => 1,
            ],
            [
                'title' => 'Office of the Director of Student’s Affairs',
                'link' => 'http://dsa.daffodilvarsity.edu.bd/',
                'is_active' => 1,
            ],

        ];
        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(8);
        }
        $links = [
            [
                'title' => 'Career Development Center',
                'link' => 'http://cdc.daffodilvarsity.edu.bd/index.php',
                'is_active' => 1,
            ],
            [
                'title' => 'Skill.jobs',
                'link' => 'https://skill.jobs/',
                'is_active' => 1,
            ],
        ];
        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(9);
        }
        $links = [

            [
                'title' => 'Physical Fitness Center',
                'link' => 'https://daffodilvarsity.edu.bd/article/gymnasium',
                'is_active' => 1,
            ],
            [
                'title' => 'Medical Center',
                'link' => 'https://daffodilvarsity.edu.bd/medical/diu-medical-center',
                'is_active' => 1,
            ],
            [
                'title' => 'Psychological Service Center',
                'link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/introduction',
                'is_active' => 1,
            ],

        ];
        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(10);
        }

        $links = [

            [
                'title' => 'Academic Calendar',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Library',
                'link' => 'http://library.daffodilvarsity.edu.bd/',
                'is_active' => 1,
            ],

            [
                'title' => 'Transport Schedule',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Dine on Campus',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'Location Map',
                'link' => '#',
                'is_active' => 1,
            ],
            [
                'title' => 'One Card Facility',
                'link' => '#',
                'is_active' => 1,
            ],

        ];
        foreach ($links as $link) {
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(11);
        }
    }
}
