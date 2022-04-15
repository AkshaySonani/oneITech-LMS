<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '1', 'Certified ScrumMaster (CSM)®', 'csm-certification-training', '16', '5', '1', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '1', 'CSPO Certification Training', 'cspo-certification-training', '16', '5', '1', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '1', 'Leading SAFe® 5 Certification', 'leading-safe-certification-training', '16', '5', '1', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '1', 'Kanban Development with Atlassian JIRA Agile Training', 'kanban-development-with-atlassian-jira-agile', '', '5', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '1', 'PMI-ACP® Certification Training', 'pmi-acp-certification-training', '21', '5', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL)");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '2', 'PMP® Certification', 'pmp-certification-training', '32', '5', '0', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '2', 'PRINCE2 Foundation and Practitioner Certification Training', 'prince2-foundation-and-practitioner-certification-training', '32', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '2', 'PRINCE2 Foundation Certification Training', 'prince2-foundation-certification-training', '16', '4', '1', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '2', 'PRINCE2® Practitioner Course', 'prince2-practitioner-certification-training', '16', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '2', 'CAPM® Certification Training', 'capm-certification-training', '16', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '2', 'Change Management', 'change-management-training', '8', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '2', 'PRINCE2 Agile® Foundation Certification', 'prince2-agile-foundation-certification-training', '', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:56:42', NULL, NULL),
        (NULL, '2', 'PRINCE2 Agile® Practitioner Certification', 'prince2-agile-practitioner-certification-training', '', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '2', 'Microsoft Project 2007/2010', 'ms-project-2007-10-training', '', '5', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL),
        (NULL, '2', 'Leadership and Communications in Projects training', 'leadership-and-communications-in-projects-training', '', '4', '0', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL)");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, '3', 'Learn Data Science with Python', 'data-science-with-python-certification-training', '42', '4.5', '1', '1', '0', '1', NULL, '2022-03-31 07:59:38', NULL, NULL), (NULL, '3', 'Machine Learning with Python Certification', 'machine-learning-with-python-certification-training', '48', '4.5', '1', '1', '0', '1', NULL, '2022-04-15 22:31:08', NULL, NULL), (NULL, '3', 'Data Science with R', 'data-science-with-r-certification-training', '40', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),(NULL, '3', 'Machine Learning with R Certification', 'machine-learning-with-r-certification-training', '40', '4.5', '0', '1', '0', '1', NULL, '2021-05-06 12:48:56', NULL, NULL), (NULL, '3', 'Deep Learning Certification', 'deep-learning-certification-training', '40', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),(NULL, '3', 'Natural Language Processing (NLP) with Python Training', 'learn-natural-language-processing-with-python-nlp-course', '30', '4.5', '0', '1', '0', '1', NULL, '2021-05-06 12:48:56', NULL, NULL), (NULL, '3', 'Introduction to Artificial Intelligence (AI) Course', 'learn-artificial-intelligence-introduction', '50', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)");


    }
}
