<h1>Contacts</h1>

<% if Contacts %>
            <div class="tableFilterSortHolder">
                <div class="tableFilterSortFilterFormHolder" data-title="Search Filters"></div>
                <div class="tableFilterSortCurrentSearchHolder" data-title="Current Search Parameters"></div>
                <div class="tableFilterSortCommonContentHolder" data-title="Common Info"></div>
                <table class="tableFilterSortTable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <a href="#" class="sortable" data-filter="Name" data-sort-direction="asc" data-sort-type="text" data-sort-default="true">Name</a>
                            </th>
                            <th scope="col" class="business">
                                <a href="#" class="sortable" data-filter="Business" data-sort-direction="asc" data-sort-type="text">Business</a>
                            </th>
                            <th scope="col" class="city">
                                <a href="#" class="sortable" data-filter="City" data-sort-direction="asc" data-sort-type="text">City</a>
                            </th>
                            <th scope="col" class="type-of-work">Type Of Work</th>
                            <th scope="col" class="status">
                                <a href="#" class="sortable" data-filter="Professional" data-sort-direction="asc" data-sort-type="text">Pro?</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <% loop Contacts %>
                        <tr class="tableFilterSortFilterRow">
                            <td>
                                <% if $Email %><a href="mailto:$Email.HiddenEmailAddress.RAW"><% end_if %>
                                <span data-filter="Name">$Title</span>
                                <% if $Email %></a><% end_if %>
                            </td>
                            <td class="business">
                                <% if $Website %><a href="$Website.URL"><% end_if %>
                                <span data-filter="Business">$BusinessName</span>
                                <% if $Website %></a><% end_if %>
                            </td>
                            <td class="city">
                                <span data-filter="City">$Location.Title</span>
                            </td>
                            <td class="type-of-work">
                                <% if Type %>
                                    <% loop Type %>
                                        <span data-filter="Type-Of-Work">$Title</span>
                                    <% end_loop %>
                                <% end_if %>
                            </td>
                            <td class="status">
                                <span data-filter="Professional"><% if IsProfessional %>Yes<% else %>No<% end_if %></span>
                            </td>
                        </tr>
                        <% end_loop %>
                    </tbody>
                </table>
                <p class="no-matches-message">
                    <strong>Sorry no matches were found, please try a different search</strong>
                </p>
            </div>
            <% end_if %>
