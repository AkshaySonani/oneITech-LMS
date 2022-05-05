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

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, '4', 'DevOps Foundation® Certification', 'devops-foundation-certification-training', '5', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'DevOps Leader', 'devOps-leader-training', '16', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Ansible Certification Training', 'ansible-training', '24', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Chef Training', 'chef-training', '24', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Docker Training', 'ocker-training', '24', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Jenkins Certification Training', 'jenkins-training', '16', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Kubernetes Training', 'kubernetes-training', '16', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Puppet Training - Certification Course', 'puppet-training', '24', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '4', 'Continuous Testing Foundation (CTF)℠', 'devops-test-engineering-training', '16', '4.5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '5', 'Architecting on AWS Certification Training', 'architecting-on-aws-certification-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '5', 'Microsoft Azure Architect Design Certification Training', 'microsoft-azure-architect-design-certification-training', '4', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '5', 'Designing Microsoft Azure Infrastructure Solutions Certification', 'designing-microsoft-azure-infrastructure-solutions-certification-training', '4', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '6', 'ITIL® Intermediate Service Operation Training', 'itil-intermediate-service-operation-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Intermediate Service Design Training\r\n', 'itil-intermediate-service-design-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Managing Across the Lifecycle(MALC) Certification', 'itil-managing-across-the-lifecycle', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Intermediate Operational Support', 'itil-intermediate-operational-support-and-analysis-osa', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Intermediate Release, Control and Validation (RCV)', 'itil-intermediate-release-control-and-validation-rcv', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® 4 Managing Professional', 'itil-managing-professional-certification', '', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Intermediate Planning, Protection and Optimization (PPO)', 'itil-intermediate-planning-protection-and-optimization-ppo', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ITIL® Intermediate Service Offerings and Agreements Training', 'itil-intermediate-service-offerings-and-agreements-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ISO 20000 Certification Course', 'iso-20000-certification-training', '', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '6', 'ISO 27000 Foundation Certification Course', 'iso-27000-foundation-certification-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '7', 'Tableau Training', 'tableau-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '7', 'Analyzing Data with Microsoft Power BI Certification', 'microsoft-power-bi-training', '32', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '8', 'Hadoop Administration Certification Training', 'hadoop-administration-training', '24', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '8', 'Apache Spark and Scala Training', 'apache-spark-and-scala-training', '24', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '8', 'Big Data Analytics Certification', 'big-data-analytics-training', '30', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '9', 'Java Training', 'java-training', '42', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '9', 'Blockchain', 'blockchain-training', '8', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)"
        );

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '10', 'Certified Business Analysis Professional', 'cbap-certification-training', '32', '5', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '10', 'CCBA® Prep Course', 'certification-of-competency-in-business-analysis-certification-training', '24', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '10', 'Entry Certificate in Business Analysis\r\n', 'entry-certificate-in-business-analysisecba-training', '16', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '10', 'PMI-PBA® Certification Training', 'pmi-pba-certification-training', '24', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '11', 'CMMI®V1.3', 'cmmi-training', '20', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '11', 'Lean Six Sigma Black Belt Certification Training', 'lean-six-sigma-black-belt-certification-training', '20', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '11', 'Lean Six Sigma Green Belt Certification Training\r\n', 'lean-six-sigma-green-belt-certification-training', '24', '5', '1', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '11', 'Lean Six Sigma Yellow Belt Certification Training', 'lean-six-sigma-yellow-belt-certification-training', '8', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

        DB::insert("INSERT INTO `courses` (`id`, `course_category_id`, `name`, `slug`, `time_duration`, `rating`, `is_trending`, `is_active`, `is_popular`, `added_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (NULL, '12', 'CISM® Certification Training', 'cism-training', '32', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '12', 'CISSP', 'cissp-training', '32', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '12', 'COBIT®5 Foundation', 'cobit-5-foundation-training', '', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '12', 'CISA®', 'cisa-certification-training', '32', '4', '0', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL),
        (NULL, '12', 'Certified Ethical Hacker', 'certified-ethical-hacker-v10-training', '40', '5', '1', '1', '0', '1', NULL, '2021-05-07 09:40:38', NULL, NULL)
        ");

    }
}
