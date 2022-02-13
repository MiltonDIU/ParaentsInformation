<?php

namespace Database\Seeders;
use App\Models\LinkCategory;
use Illuminate\Database\Seeder;

class LinkCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'    => 1,
                'title' => 'RECENT ANNOUNCEMENT FROM DIU',
                'slug' => 'announcement',
                'content' => 'Want to know what\'s happening at DIU? Check out the messages we\'ve recently sent to our students.',
                'external_link' => '',
                'external_link_text' => '',
                'position' => '1',
                'page_name' => 'home',
                'image_position' => 'right',
                'is_utilities' => '0',
                'is_active' => '1',
            ],

             [
                'id'    => 2,
                'title' => 'PEER SCHOLARSHIP',
                 'slug' => 'scholarship',
                'content' => 'PEER Scholarship is a self-driven scholarship program to help those students of the University who struggling hard to survive/continue their study due to absolute financial crisis even though they bears bright academic result.',
                'external_link' => 'http://dsa.daffodilvarsity.edu.bd/index.php/activities/scholarship',
                 'external_link_text' => 'Contribute',
                'position' => '2',
                'page_name' => 'home',
                'image_position' => 'left',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
             [
                'id'    => 3,
                'title' => 'Hall Accommodation',
                'slug' => 'accommodation',
                'content' => 'If you are planning to accommodate your student in DIU halls, then visit our Hall Portal:',
                'external_link' => 'https://hall.daffodilvarsity.edu.bd/',
                 'external_link_text' => 'Hall Accommodation',
                'position' => '3',
                'page_name' => 'home',
                'image_position' => 'center',
                'is_utilities' => '1',
                'is_active' => '1',
            ],
             [
                'id'    => 4,
                'title' => 'Payment Portal',
                 'slug' => 'portal',
                'content' => 'Check your student’s account balance, make payments, view payment history or enroll in a payment plan:',
                'external_link' => '',
                 'external_link_text' => 'Payment Portal',
                'position' => '4',
                'page_name' => 'home',
                'image_position' => 'right',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    => 5,
                'title' => 'Helpdesk Support',
                  'slug' => 'support',
                'content' => 'Get connected with the Registrar Office, Departments and support offices through our trackable HelpDesk Support Ticket:',
                'external_link' => 'https://pd.daffodilvarsity.edu.bd/support_ticket',
                 'external_link_text' => 'Helpdesk Support',
                'position' => '5',
                'page_name' => 'home',
                'image_position' => 'center',
                'is_utilities' => '1',
                'is_active' => '1',
            ],
              [
                'id'    => 6,
                'title' => 'GET UPDATES',
                  'slug' => 'updates',
                'content' => 'Sign up for the DIU Parent Experience, a newsletter geared towards parents and families. Get updates about campus life, things that are happening at the University, and need-to-know information about your student.',
                'external_link' => 'http://diuparents.mi/register',
                 'external_link_text' => 'Sign up today',
                'position' => '6',
                'page_name' => 'home',
                'image_position' => 'left',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    => 7,
                'title' => 'SAFETY & SECURITY',
                  'slug' => 'security',
                'content' => '',
                'external_link' => '',
                 'external_link_text' => '',
                'position' => '7',
                'page_name' => 'home',
                'image_position' => 'left',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    => 8,
                'title' => 'IMPORTANT OFFICES FOR PARENTS',
                'slug' => 'parent',
                'content' => '',
                'external_link' => '',
                 'external_link_text' => '',
                'position' => '8',
                'page_name' => 'home',
                'image_position' => 'right',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    =>9,
                'title' => 'CAREER SERVICES',
                'slug' => 'services',
                'content' => 'Our team of experts will make sure your student is prepared to shine when it’s time to start their career. See all of the resources and opportunities available to all DIU students.',
                'external_link' => '',
                 'external_link_text' => '',
                'position' => '9',
                'page_name' => 'home',
                'image_position' => 'left',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    => 10,
                'title' => 'STAYING WELL',
                'slug' => 'well',
                'content' => 'In Daffodil International University, we care for both our students’ mind and body that are key to success in their academic journey. Get connected with the professional staff or make an appointment.',
                'external_link' => '',
                 'external_link_text' => '',
                'position' => '10',
                'page_name' => 'home',
                'image_position' => 'right',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
              [
                'id'    => 11,
                'title' => 'LIFE ON CAMPUS',
                'slug' => 'campus',
                'content' => '',
                'external_link' => '',
                 'external_link_text' => '',
                'position' => '11',
                'page_name' => 'home',
                'image_position' => 'left',
                'is_utilities' => '0',
                'is_active' => '1',
            ],
        ];

        LinkCategory::insert($categories);
    }
}
