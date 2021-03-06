<!-- You should retain this javascript in your own template! -->

<!-- IF S_IN_SEARCH_POPUP -->
<script type="text/javascript">
// <![CDATA[
	function insert_user(user)
	{
		opener.document.forms['{S_FORM_NAME}'].{S_FIELD_NAME}.value = ( opener.document.forms['{S_FORM_NAME}'].{S_FIELD_NAME}.value.length && opener.document.forms['{S_FORM_NAME}'].{S_FIELD_NAME}.type == "textarea" ) ? opener.document.forms['{S_FORM_NAME}'].{S_FIELD_NAME}.value + "\n" + user : user;
	}

	function insert_marked(users)
	{
		if (typeof(users.length) == "undefined")
		{
			if (users.checked)
			{
				insert_user(users.value);
			}
		}
		else if (users.length > 0)
		{
			for (i = 0; i < users.length; i++)
			{
				if (users[i].checked)
				{
					insert_user(users[i].value);
				}
			}
		}

		self.close();
	}

	function insert_single(user)
	{
		opener.document.forms['{S_FORM_NAME}'].{S_FIELD_NAME}.value = user;
		self.close();
	}		

	/**
	* Mark/unmark checklist
	* id = ID of parent container, name = name prefix, state = state [true/false]
	*/
	function marklist(id, name, state)
	{
		var parent = document.getElementById(id);
		if (!parent)
		{
			eval('parent = document.' + id);
		}

		if (!parent)
		{
			return;
		}

		var rb = parent.getElementsByTagName('input');
		
		for (var r = 0; r < rb.length; r++)
		{
			if (rb[r].name.substr(0, name.length) == name)
			{
				rb[r].checked = state;
			}
		}
	}
// ]]>
</script>
<!-- ENDIF -->

<form method="post" action="{S_MODE_ACTION}" name="search">

{IMG_THL}{IMG_THC}<span class="forumlink">{L_FIND_USERNAME}</span>{IMG_THR}<table class="forumlinenb">
<tr><td class="row3" colspan="4"><span class="gensmall">{L_FIND_USERNAME_EXPLAIN}</span></td></tr>
<tr>
	<td class="row1"><b class="genmed">{L_USERNAME}:</b></td>
	<td class="row2"><input class="post" type="text" name="username" value="{USERNAME}" /></td>
	<td class="row1"><b class="genmed">{L_ICQ}:</b></td>
	<td class="row2"><input class="post" type="text" name="icq" value="{ICQ}" /></td>
</tr>
<tr>
<!-- IF S_EMAIL_SEARCH_ALLOWED -->
	<td class="row1"><b class="genmed">{L_EMAIL}:</b></td>
	<td class="row2"><input class="post" type="text" name="email" value="{EMAIL}" /></td>
<!-- ELSE -->
	<td class="row1" colspan="2">&nbsp;</td>
<!-- ENDIF -->
	<td class="row1"><b class="genmed">{L_AIM}:</b></td>
	<td class="row2"><input class="post" type="text" name="aim" value="{AIM}" /></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">{L_JOINED}:</b></td>
	<td class="row2"><select name="joined_select">{S_JOINED_TIME_OPTIONS}</select> <input class="post" type="text" name="joined" value="{JOINED}" /></td>
	<td class="row1"><b class="genmed">{L_YIM}:</b></td>
	<td class="row2"><input class="post" type="text" name="yahoo" value="{YAHOO}" /></td>
</tr>
<tr>
<!-- IF S_VIEWONLINE -->
	<td class="row1"><b class="genmed">{L_LAST_ACTIVE}:</b></td>
	<td class="row2"><select name="active_select">{S_ACTIVE_TIME_OPTIONS}</select> <input class="post" type="text" name="active" value="{ACTIVE}" /></td>
<!-- ELSE -->
	<td class="row1" colspan="2">&nbsp;</td>
<!-- ENDIF -->
	<td class="row1"><b class="genmed">{L_MSNM}:</b></td>
	<td class="row2"><input class="post" type="text" name="msn" value="{MSNM}" /></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">{L_POSTS}:</b></td>
	<td class="row2"><select name="count_select">{S_COUNT_OPTIONS}</select> <input class="post" type="text" name="count" value="{COUNT}" /></td>
	<td class="row1"><b class="genmed">{L_SKYPE}:</b></td>
	<td class="row2"><input class="post" type="text" name="skype" value="{SKYPE}" /></td>
</tr>
<tr>
	<td class="row1"><b class="genmed">{L_SELECT_SORT_METHOD}:</b></td>
	<td class="row2 tdnw">&nbsp;{S_MODE_SELECT}&nbsp;{S_ORDER_SELECT}</td>
<!-- IF S_IP_SEARCH_ALLOWED -->
	<td class="row1"><b class="genmed">{L_POST_IP}:</b></td>
	<td class="row2"><input class="post" type="text" name="ip" value="{IP}" /></td>
<!-- ELSE -->
	<td class="row1"><b class="genmed">&nbsp;</b></td>
	<td class="row2 tdnw">&nbsp;</td>
<!-- ENDIF -->
</tr>
<tr><td class="cat" colspan="4"><input class="mainoption" type="submit" name="submit" value="{L_SEARCH}" />&nbsp;&nbsp;<input class="liteoption" type="reset" value="{L_RESET}" /></td></tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}

{S_FORM_TOKEN}
</form>

<br class="clear" />