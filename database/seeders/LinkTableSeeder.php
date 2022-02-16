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
        $links = [
            [
                'title'           => 'Academic Council',
                'link'          => 'https://daffodilvarsity.edu.bd/committee/academic-council',
                'is_active'           => 1,
            ],

            [
                'title'           => 'Academic Guidelines',
                'link'          => 'https://daffodilvarsity.edu.bd/article/academic-guidelines',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Academia Lecture Series',
                'link'          => 'https://daffodilvarsity.edu.bd/lecture-list',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Accommodation',
                'link'          => 'https://daffodilvarsity.edu.bd/article/hostel-facilities',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Administration',
                'link'          => 'https://daffodilvarsity.edu.bd/admin/management',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Admission',
                'link'          => 'https://daffodilvarsity.edu.bd/admission',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Admission Contact',
                'link'          => 'https://daffodilvarsity.edu.bd/article/admission-contact',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Apply Now',
                'link'          => 'https://pd.daffodilvarsity.edu.bd/admission/online',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Alumni',
                'link'          => 'https://somporka.com/login/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Apps',
                'link'          => 'https://daffodilvarsity.edu.bd/article/apps',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Art of Living',
                'link'          => 'http://artofliving.social/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Associate Deans & Associate Heads',
                'link'          => 'https://daffodilvarsity.edu.bd/article/associate-deans-heads',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Blog',
                'link'          => 'http://blog.daffodilvarsity.edu.bd/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Blended Learning Center (BLC)',
                'link'          => 'https://elearn.daffodilvarsity.edu.bd/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Brand Documents',
                'link'          => 'https://daffodilvarsity.edu.bd/article/downloads',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Brochure',
                'link'          => 'https://daffodilvarsity.edu.bd/article/brochure',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Business Administration',
                'link'          => 'https://daffodilvarsity.edu.bd/department/bba',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Board of Trustees',
                'link'          => 'https://daffodilvarsity.edu.bd/committee/board-of-trustees',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Business Administration (BBA)',
                'link'          => 'https://dba.daffodilvarsity.edu.bd/bba/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Business Studies (BBS)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/bbs',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Real Estate (BRE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/bre',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Tourism & Hospitality Management (BTHM)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/thm',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Innovation & Entrepreneurship (BE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/de',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Computer Science & Engineering (CSE)',
                'link'          => 'https://cse.daffodilvarsity.edu.bd/program/undergraduate/day-program',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Computing & Information System (CIS)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/cis',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Software Engineering (SWE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/swe',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Environmental Science and Disaster Management (ESDM)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/esdm',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Multimedia & Creative Technology (MCT)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/mct',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in General Educational Development (GED)',
                'link'          => 'http://ged.daffodilvarsity.edu.bd/',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Information Technology & Management (ITM)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/itm',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Electronics & Telecommunication Engineering (ETE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/ete',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Textile Engineering (TE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/te',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Electrical & Electronic Engineering (EEE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/eee',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc. in Architecture (B. Arch)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/architecture',
                'is_active'           => 1,
            ],
            [
                'title'           => 'B.Sc in Civil Engineering',
                'link'          => 'https://daffodilvarsity.edu.bd/department/ce',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Pharmacy (Hons)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/pharmacy',
                'is_active'           => 1,
            ],

            [
                'title'           => 'B.Sc. in Nutrition & Food Engineering (NFE)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/nfe',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Arts (Hons) in English',
                'link'          => 'https://daffodilvarsity.edu.bd/department/english',
                'is_active'           => 1,
            ],
            [
                'title'           => 'Bachelor of Law (Hons)(LLB)',
                'link'          => 'https://daffodilvarsity.edu.bd/department/law',
                'is_active'           => 1,
            ],
            [
                'title'           => 'BSS (Hons) in Journalism, Media and Communication',
                'link'          => 'https://daffodilvarsity.edu.bd/department/jmc',
                'is_active'           => 1,
            ],
        ];



        foreach ($links as $link){
            $linkData = Link::create($link);
            $linkData->link_categories()->sync(12);
        }
    }
}
