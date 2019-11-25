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
 * MFA renderer.
 *
 * @package     tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class tool_mfa_renderer extends plugin_renderer_base {

    /**
     * Returns the state of the factor as a badge
     *
     * @return html
     */
    public function get_state_badge($state) {

        switch ($state) {
            case \tool_mfa\plugininfo\factor::STATE_PASS:
                return \html_writer::tag('span', get_string('state:pass', 'tool_mfa'), array('class' => 'badge badge-success'));

            case \tool_mfa\plugininfo\factor::STATE_FAIL:
                return \html_writer::tag('span', get_string('state:fail', 'tool_mfa'), array('class' => 'badge badge-danger'));

            case \tool_mfa\plugininfo\factor::STATE_NEUTRAL:
                return \html_writer::tag('span', get_string('state:neutral', 'tool_mfa'), array('class' => 'badge badge-warning'));

            default:
                return \html_writer::tag('span', get_string('state:unknown', 'tool_mfa'), array('class' => 'badge badge-secondary'));
        }
    }

}

