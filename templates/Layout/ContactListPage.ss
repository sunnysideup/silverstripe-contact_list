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
                </td>
            </tr>
        <% end_loop %>

        </tbody>
    </table>
<% end_if %>
</div>
