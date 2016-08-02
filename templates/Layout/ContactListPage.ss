<h1>Contacts</h1>

<% if Contacts %>
<div class="tableFilterSortHolder">
    <div class="tableFilterSortFilterFormHolder" data-title="My Filter Title"></div>
    <div class="tableFilterSortCommonContentHolder" data-title="Common Info"></div>
    <table class="tableFilterSortTable">
        <thead>
            <tr>
                <th scope="col">
                    <a href="#" class="sortable" data-filter="Title" data-sort-direction="asc" data-sort-type="text" data-sort-default="true">Name</a>
                </th>
                <th scope="col">
                    <a href="#" class="sortable" data-filter="BusinessName" data-sort-direction="asc" data-sort-type="text">Business</a>
                </th>
                <th scope="col">
                    <a href="#" class="sortable" data-filter="City" data-sort-direction="asc" data-sort-type="text">City</a>
                </th>
                <th scope="col">
                    <a href="#" class="sortable" data-filter="IsProfessional" data-sort-direction="asc" data-sort-type="text">Professional?</a>
                </th>
                <th scope="col">
            </tr>
        </thead>
        <tbody>
            <% loop Contacts %>
            <tr class="tableFilterSortFilterRow">
                <td>
<<<<<<< HEAD
                    <% if $Email %><a href="mailto:$Email.HiddenEmailAddress.RAW"><% end_if %>
                    <span data-filter="Title">$Title</span>
                    <% if $Email %></a><% end_if %>
                </td>
                <td>
                    <% if $Website %><a href="$Website.URL"><% end_if %>
                    <span data-filter="BusinessName">$BusinessName</span>
                    <% if $Website %></a><% end_if %>
                </td>
                <td>
                    <span data-filter="Location">$Location.Title</span>
                </td>
                <td>
                    <% if $Types %>
                    <ul>
                        <% loop Types %>
                            <li>
                                <span data-filter="Type">$Title</span>
                            </li>
                        <% end_loop %>
                    </ul>
                    <% end_if %>
=======
                    <% if Email %><a href="$Email">
                    <span data-filter="Title">$Title</span>
                <% end_if %></a><% end_if %>
                </td>
                <td><span data-filter="Original Producer">Sunny Side Up</span></td><% if Website %><a href="$Website.URL">Business</a><% end_if %>
                <td><span data-filter="Colour">Red</span></td>
                <td><span data-filter="Size">S</span></td>
                <td><span data-filter="Weight">6kg.</span></td>
                <td><span data-filter="Price">$1.74</span></td>
                <td><span data-filter="Rating">5 Stars</span></td>
                <td>
                    <a href="#" class="tableFilterSortMoreDetails" data-rel="Row_7_Details">more</a>
                    <div style="display: none;" id="Row_7_Details">
                        <h6>Tags</h6>
                        <ul>
                            <li><span data-filter="Tags">Taro</span></li>
                            <li><span data-filter="Tags">Swedes</span></li>
                            <li><span data-filter="Tags">Pumpkin</span></li>
                        </ul>
                    </div>
>>>>>>> 9dda3bd50a6be931f4100d90bab9a7ce75772c28
                </td>
            </tr>
        <% end_loop %>

        </tbody>
    </table>
<% end_if %>
</div>
<<<<<<< HEAD
=======



<script src="https://code.jquery.com/jquery-git.min.js"></script>
<script src="../../javascript/TableFilterSort.js"></script>
<script type="text/javascript">
    var myFilterSortTable = new TableFilterSortFx(".tableFilterSortHolder");
</script>
</html>
>>>>>>> 9dda3bd50a6be931f4100d90bab9a7ce75772c28
