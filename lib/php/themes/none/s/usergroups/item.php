<?php declare(strict_types = 1);?>
<?php error_log(__FILE__);?>
<?php
// users/item.php 20151030 (C) 2015 Mark Constable <markc@renta.net> (AGPL-3.0)

return '
      <hr>
      <table style="table-layout: fixed">
        <tr><td></td><td>ID</td><td>' . $id . '</td><td></td></tr>
        <tr><td></td><td>Name</td><td>' . $name . '</td><td></td></tr>
        <tr><td></td><td>Password</td><td>' . $password . '</td><td></td></tr>
        <tr><td></td><td>GID</td><td>' . $gid . '</td><td></td></tr>
        <tr><td></td><td>Updated</td><td>' . $updated . '</td><td></td></tr>
        <tr><td></td><td>Created</td><td>' . $created . '</td><td></td></tr>
        <tr><td></td>
          <td colspan="2" style="text-align:right">
            <p>'
            .$this->a('?o=s_usergroups&m=delete&i=' . $id, 'Delete', 'danger', ' onClick="javascript: return confirm(\'Are you sure you want to remove '.$id.'?\')"')
            .$this->a('?o=s_usergroups&m=update&i=' . $id, 'Edit', 'primary').'
            </p>
          </td>
        </tr>
      </table>';
