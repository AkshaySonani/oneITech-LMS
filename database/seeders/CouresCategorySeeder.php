<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouresCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO `course_categories` (`id`, `name`, `slug`, `description`, `is_active`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES(NULL, 'Agile Management', 'agile-management', 'Master Scrum and the principles of Agile project management and unleash your team\'s potential to deliver more innovative solutions faster. Explore our course offerings.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Project Management', 'project-management', 'In an increasingly projectized world, project management training ensures that you’re ready to meet the demands of projects and employers across the globe. Explore our course offerings.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Data Science', 'data-science', 'Scientific methods, programming, and analytics combine to glean insights from data and empower a business to take appropriate actions. Accelerate your data science career path.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'DevOps', 'devops', 'Learn how to use DevOps to solve new challenges, increase agility, shorten releases, improve reliability and stay ahead of the competition. Fast track your DevOps career path.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Cloud Computing', 'cloud-computing', 'Cloud computing has become the preferred technology of businesses across the globe, advancing outcomes for employees and industry alike. Become a complete Cloud professional.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'IT Service Management', 'it-service-management', 'In a world of rapidly changing technology, it\'s more about how you use technology versus the technology itself. Learn the latest in ITSM and advance your IT career path.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'BI and Visualization', 'business-intelligence-and-visualization', 'Learn how to turn data into opportunity with cutting edge approaches to business intelligence and data visualization. Drive better business decisions and accelerate your career path.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Big Data', 'big-data', 'The amount of data in the world continues to grow exponentially. Discover big data, how to get started, best practices and solutions for handling big data now and in the future.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Programming', 'programming', 'Take your skills to the next level with courses on the most popular programming languages and gain a deep understanding of how to build, deploy, secure and scale.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL)
        ");

        DB::insert("INSERT INTO `course_categories` (`id`, `name`, `slug`, `description`, `is_active`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES(NULL, 'Business Management', 'business-management', 'Business management is an essential real-world business skill. Discover management concepts, tools and techniques, learn how to make difficult business decisions and become a better leader.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'Quality Management', 'quality-management', 'Quality is a crucial parameter, differentiating an organization from its competitors. Acquire essential skills in quality management to ensure superior quality products and services.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL),(NULL, 'IT Security', 'it-security', 'Every employee, from technologist to supporting role, must understand how to safeguard the org against security threats. Learn the latest from experts with real-world experience.', '1', '1', NULL, '2022-03-24 07:34:21', '2022-03-24 07:34:21', NULL)
        ");
    }
}
