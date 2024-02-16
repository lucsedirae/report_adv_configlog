<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Config changes report edit note form
 * This plugin is a fork of the core report_configlog report.
 *
 * @package   report
 * @subplugin adv_configlog
 * @copyright 2023 Jon Deavers jondeavers@gmail.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');

global $PAGE, $OUTPUT;

$configid = optional_param('configid', '', PARAM_INT);

$parenturl = new moodle_url('/report/adv_configlog/index.php');
$pageurl = new moodle_url('/report/adv_configlog/edit.php');
admin_externalpage_setup('reportadv_configlog', '', ['configid' => $configid], '', ['pagelayout' => 'admin']);

// Output.
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('editnotes', 'report_adv_configlog'));

echo $configid;

echo $OUTPUT->footer();