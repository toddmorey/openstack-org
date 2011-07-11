 <ul class="overviewNav">
 	  <% control Level(1) %>
      <li class="$LinkingMode"><a href="$Link" title="Go to the &Title&quot; page">$MenuTitle</a></li>
      <% end_control %>
 </ul>
  <ul class="subsectionNav">
    <% control Menu(2) %>
      <li class="$LinkingMode"><a href="$Link" title="Go to the &quot;{$Title}&quot; page">$MenuTitle</a></li>
    <% end_control %>
  </ul>
