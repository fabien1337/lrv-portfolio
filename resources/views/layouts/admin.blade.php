<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fabien MUNOZ - Administration @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/pulse.min.css')}}">
    @yield('stylesheet')
  </head>
  <body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed side-trans-enabled sidebar-inverse">
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
              <!-- Logo -->
              <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
              </span>
              <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a href="{{route('front.homepage')}}">
                  <img src="{{asset('images/logo/logo7.png')}}" height="40" width="35" alt="Fabien Munoz Logo">
                </a>
              </div>
              <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
              <!-- Visible only in mini mode -->
              <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="#">
                  <img class="img-avatar" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="#">{{auth()->user()->name}}</a>
                  </li>
                  <li class="list-inline-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="si si-logout"></i>
                        </a>
                    </form>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li>
                  <a href="{{route('admin.dashboard')}}"><i class="si si-home"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                  <a href="{{route('admin.contacts.index')}}"><i class="fa fa-inbox"></i><span class="sidebar-mini-hide">Inbox</span></a>
                </li>
                {{-- <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                  <ul>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                        </li>
                        <li>
                          <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                        </li>
                        <li>
                          <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Hosting</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_hosting_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                          <a href="be_pages_hosting_emails.html">Emails</a>
                        </li>
                        <li>
                          <a href="be_pages_hosting_account.html">Account</a>
                        </li>
                        <li>
                          <a href="be_pages_hosting_support.html">Support</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_real_estate_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                          <a href="be_pages_real_estate_listing.html">Listing</a>
                        </li>
                        <li>
                          <a href="be_pages_real_estate_listing_new.html">Add New Listing</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                          <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                        </li>
                        <li>
                          <a href="be_pages_crypto_wallets.html">Wallets</a>
                        </li>
                        <li>
                          <a href="be_pages_crypto_settings.html">Settings</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                          <a href="be_pages_ecom_orders.html">Orders</a>
                        </li>
                        <li>
                          <a href="be_pages_ecom_order.html">Order</a>
                        </li>
                        <li>
                          <a href="be_pages_ecom_products.html">Products</a>
                        </li>
                        <li>
                          <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                        </li>
                        <li>
                          <a href="be_pages_ecom_customer.html">Customer</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_elearning_courses.html">Courses</a>
                        </li>
                        <li>
                          <a href="be_pages_elearning_course.html">Course</a>
                        </li>
                        <li>
                          <a href="be_pages_elearning_lesson.html">Lesson</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                      <ul>
                        <li>
                          <a href="be_pages_forum_categories.html">Categories</a>
                        </li>
                        <li>
                          <a href="be_pages_forum_topics.html">Topics</a>
                        </li>
                        <li>
                          <a href="be_pages_forum_discussion.html">Discussion</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                      <ul>
                        <li>
                          <a href="db_classic.html"><span class="sidebar-mini-hide">Classic</span></a>
                        </li>
                        <li>
                          <a href="db_clean.html"><span class="sidebar-mini-hide">Clean</span></a>
                        </li>
                        <li>
                          <a href="db_social.html"><span class="sidebar-mini-hide">Social</span></a>
                        </li>
                        <li>
                          <a href="db_corporate.html"><span class="sidebar-mini-hide">Corporate</span></a>
                        </li>
                        <li>
                          <a href="db_minimal.html"><span class="sidebar-mini-hide">Minimal</span></a>
                        </li>
                        <li>
                          <a href="db_pop.html"><span class="sidebar-mini-hide">Pop</span></a>
                        </li>
                        <li>
                          <a href="db_dark.html"><span class="sidebar-mini-hide">Dark</span></a>
                        </li>
                        <li>
                          <a href="db_medical.html"><span class="sidebar-mini-hide">Medical</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                      <ul>
                        <li>
                          <a href="bd_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                          <a href="bd_search.html">Search</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                        </li>
                        <li>
                          <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                  <ul>
                    <li>
                      <a href="be_blocks.html">Styles</a>
                    </li>
                    <li>
                      <a href="be_blocks_draggable.html">Draggable</a>
                    </li>
                    <li>
                      <a href="be_blocks_api.html">API</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                  <ul>
                    <li>
                      <a href="be_widgets_tiles.html">Tiles</a>
                    </li>
                    <li>
                      <a href="be_widgets_users.html">Users</a>
                    </li>
                    <li>
                      <a href="be_widgets_stats.html">Statistics</a>
                    </li>
                    <li>
                      <a href="be_widgets_media.html">Media</a>
                    </li>
                    <li>
                      <a href="be_widgets_blog.html">Blog</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                  <ul>
                    <li>
                      <a href="be_ui_grid.html">Grid</a>
                    </li>
                    <li>
                      <a href="be_ui_icons.html">Icons</a>
                    </li>
                    <li>
                      <a href="be_ui_typography.html">Typography</a>
                    </li>
                    <li>
                      <a href="be_ui_buttons.html">Buttons</a>
                    </li>
                    <li>
                      <a href="be_ui_navigation.html">Navigation</a>
                    </li>
                    <li>
                      <a href="be_ui_tabs.html">Tabs</a>
                    </li>
                    <li>
                      <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                    </li>
                    <li>
                      <a href="be_ui_alerts.html">Alerts</a>
                    </li>
                    <li>
                      <a href="be_ui_progress.html">Progress</a>
                    </li>
                    <li>
                      <a href="be_ui_images.html">Images</a>
                    </li>
                    <li>
                      <a href="be_ui_animations.html">Animations</a>
                    </li>
                    <li>
                      <a href="be_ui_ribbons.html">Ribbons</a>
                    </li>
                    <li>
                      <a href="be_ui_timeline.html">Timeline</a>
                    </li>
                    <li>
                      <a href="be_ui_accordion.html">Accordion</a>
                    </li>
                    <li>
                      <a href="be_ui_color_themes.html">Color Themes</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                  <ul>
                    <li>
                      <a href="be_tables_styles.html">Styles</a>
                    </li>
                    <li>
                      <a href="be_tables_responsive.html">Responsive</a>
                    </li>
                    <li>
                      <a href="be_tables_helpers.html">Helpers</a>
                    </li>
                    <li>
                      <a href="be_tables_pricing.html">Pricing</a>
                    </li>
                    <li>
                      <a href="be_tables_datatables.html">DataTables</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                  <ul>
                    <li>
                      <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                    </li>
                    <li>
                      <a href="be_forms_elements_material.html">Material Elements</a>
                    </li>
                    <li>
                      <a href="be_forms_css_inputs.html">CSS Inputs</a>
                    </li>
                    <li>
                      <a href="be_forms_plugins.html">Plugins</a>
                    </li>
                    <li>
                      <a href="be_forms_editors.html">Editors</a>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">CKEditor 5</a>
                      <ul>
                        <li>
                          <a href="be_forms_ckeditor5_classic.html">Classic</a>
                        </li>
                        <li>
                          <a href="be_forms_ckeditor5_inline.html">Inline</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="be_forms_validation.html">Validation</a>
                    </li>
                    <li>
                      <a href="be_forms_wizard.html">Wizard</a>
                    </li>
                    <li>
                      <a href="be_forms_premade.html">Pre-made</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                  <ul>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                      <ul>
                        <li>
                          <a href="be_layout_default.html">Default</a>
                        </li>
                        <li>
                          <a href="be_layout_flipped.html">Flipped</a>
                        </li>
                        <li>
                          <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                      <ul>
                        <li>
                          <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                          <ul>
                            <li>
                              <a href="be_layout_header_modern.html">Modern</a>
                            </li>
                            <li>
                              <a href="be_layout_header_classic.html">Classic</a>
                            </li>
                            <li>
                              <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                            </li>
                            <li>
                              <a href="be_layout_header_glass.html">Glass</a>
                            </li>
                            <li>
                              <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                          <ul>
                            <li>
                              <a href="be_layout_header_fixed_modern.html">Modern</a>
                            </li>
                            <li>
                              <a href="be_layout_header_fixed_classic.html">Classic</a>
                            </li>
                            <li>
                              <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                            </li>
                            <li>
                              <a href="be_layout_header_fixed_glass.html">Glass</a>
                            </li>
                            <li>
                              <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                      <ul>
                        <li>
                          <a href="be_layout_sidebar_inverse.html">Inverse</a>
                        </li>
                        <li>
                          <a href="be_layout_sidebar_hidden.html">Hidden</a>
                        </li>
                        <li>
                          <a href="be_layout_sidebar_mini.html">Mini</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                      <ul>
                        <li>
                          <a href="be_layout_side_overlay_visible.html">Visible</a>
                        </li>
                        <li>
                          <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                        </li>
                        <li>
                          <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                      <ul>
                        <li>
                          <a href="be_layout_content_boxed.html">Boxed</a>
                        </li>
                        <li>
                          <a href="be_layout_content_narrow.html">Narrow</a>
                        </li>
                        <li>
                          <a href="be_layout_content_full_width.html">Full Width</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                      <ul>
                        <li>
                          <a href="be_layout_hero_color.html">Color</a>
                        </li>
                        <li>
                          <a href="be_layout_hero_bubbles.html">Bubbles</a>
                        </li>
                        <li>
                          <a href="be_layout_hero_image.html">Image</a>
                        </li>
                        <li>
                          <a href="be_layout_hero_video.html">Video</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="be_layout_api.html">API</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                  <ul>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                      <ul>
                        <li>
                          <a href="#">Link 1-1</a>
                        </li>
                        <li>
                          <a href="#">Link 1-2</a>
                        </li>
                        <li>
                          <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                          <ul>
                            <li>
                              <a href="#">Link 2-1</a>
                            </li>
                            <li>
                              <a href="#">Link 2-2</a>
                            </li>
                            <li>
                              <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                              <ul>
                                <li>
                                  <a href="#">Link 3-1</a>
                                </li>
                                <li>
                                  <a href="#">Link 3-2</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                      <ul>
                        <li>
                          <a href="be_comp_chat_multiple.html">Multiple</a>
                        </li>
                        <li>
                          <a href="be_comp_chat_multiple_alt.html">Multiple Alt</a>
                        </li>
                        <li>
                          <a href="be_comp_chat_single.html">Single</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="be_comp_charts.html">Charts</a>
                    </li>
                    <li>
                      <a href="be_comp_loaders.html">Loaders</a>
                    </li>
                    <li>
                      <a href="be_comp_dialogs.html">Dialogs</a>
                    </li>
                    <li>
                      <a href="be_comp_notifications.html">Notifications</a>
                    </li>
                    <li>
                      <a href="be_comp_nestable.html">Nestable</a>
                    </li>
                    <li>
                      <a href="be_comp_gallery.html">Gallery</a>
                    </li>
                    <li>
                      <a href="be_comp_sliders.html">Sliders</a>
                    </li>
                    <li>
                      <a href="be_comp_scrolling.html">Scrolling</a>
                    </li>
                    <li>
                      <a href="be_comp_rating.html">Rating</a>
                    </li>
                    <li>
                      <a href="be_comp_filtering.html">Filtering</a>
                    </li>
                    <li>
                      <a href="be_comp_appear.html">Appear</a>
                    </li>
                    <li>
                      <a href="be_comp_countto.html">CountTo</a>
                    </li>
                    <li>
                      <a href="be_comp_calendar.html">Calendar</a>
                    </li>
                    <li>
                      <a href="be_comp_image_cropper.html">Image Cropper</a>
                    </li>
                    <li>
                      <a href="be_comp_maps_google.html">Google Maps</a>
                    </li>
                    <li>
                      <a href="be_comp_maps_vector.html">Vector Maps</a>
                    </li>
                    <li>
                      <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                <li class="open">
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                  <ul>
                    <li>
                      <a href="be_pages_generic_blank.html">Blank</a>
                    </li>
                    <li>
                      <a class="active" href="be_pages_generic_blank_block.html">Blank (Block)</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_search.html">Search</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_profile.html">Profile</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_profile_edit.html">Profile Edit</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_inbox.html">Inbox</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_invoice.html">Invoice</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_faq.html">FAQ</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_blog.html">Blog</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_story.html">Story</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_project_list.html">Project List</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_project.html">Project</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_team.html">Team</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_contact.html">Contact</a>
                    </li>
                    <li>
                      <a href="be_pages_generic_todo.html">Todo</a>
                    </li>
                    <li>
                      <a href="op_coming_soon.html">Coming Soon</a>
                    </li>
                    <li>
                      <a href="op_maintenance.html">Maintenance</a>
                    </li>
                    <li>
                      <a href="op_status.html">Status</a>
                    </li>
                    <li>
                      <a href="op_installation.html">Installation</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                  <ul>
                    <li>
                      <a href="be_pages_auth_all.html">All</a>
                    </li>
                    <li>
                      <a href="op_auth_signin.html">Sign In</a>
                    </li>
                    <li>
                      <a href="op_auth_signin2.html">Sign In 2</a>
                    </li>
                    <li>
                      <a href="op_auth_signin3.html">Sign In 3</a>
                    </li>
                    <li>
                      <a href="op_auth_signup.html">Sign Up</a>
                    </li>
                    <li>
                      <a href="op_auth_signup2.html">Sign Up 2</a>
                    </li>
                    <li>
                      <a href="op_auth_signup3.html">Sign Up 3</a>
                    </li>
                    <li>
                      <a href="op_auth_lock.html">Lock Screen</a>
                    </li>
                    <li>
                      <a href="op_auth_lock2.html">Lock Screen 2</a>
                    </li>
                    <li>
                      <a href="op_auth_lock3.html">Lock Screen 3</a>
                    </li>
                    <li>
                      <a href="op_auth_reminder.html">Pass Reminder</a>
                    </li>
                    <li>
                      <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                    </li>
                    <li>
                      <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                  <ul>
                    <li>
                      <a href="be_pages_error_all.html">All</a>
                    </li>
                    <li>
                      <a href="op_error_400.html">400</a>
                    </li>
                    <li>
                      <a href="op_error_401.html">401</a>
                    </li>
                    <li>
                      <a href="op_error_403.html">403</a>
                    </li>
                    <li>
                      <a href="op_error_404.html">404</a>
                    </li>
                    <li>
                      <a href="op_error_500.html">500</a>
                    </li>
                    <li>
                      <a href="op_error_503.html">503</a>
                    </li>
                  </ul>
                </li> --}}
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button> --}}
            <!-- END Open Search Section -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block">{{auth()->user()->name}}</span>
                <i class="fa fa-angle-down ml-5"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                <a class="dropdown-item" href="#">
                  <i class="si si-user mr-5"></i> Profile
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.contacts.index')}}">
                  <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                  <span class="badge badge-primary">{{$nb_unseen_mails}}</span>
                </a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="si si-logout mr-5"></i> Sign Out
                    </a>
                </form>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications -->
            {{-- <div class="btn-group" role="group">
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-flag"></i>
                <span class="badge badge-primary badge-pill">5</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                <ul class="list-unstyled my-20">
                  <li>
                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                      <div class="ml-5 mr-15">
                        <i class="fa fa-fw fa-check text-success"></i>
                      </div>
                      <div class="media-body pr-10">
                        <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                        <div class="text-muted font-size-sm font-italic">15 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                      <div class="ml-5 mr-15">
                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                      </div>
                      <div class="media-body pr-10">
                        <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                        <div class="text-muted font-size-sm font-italic">50 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                      <div class="ml-5 mr-15">
                        <i class="fa fa-fw fa-times text-danger"></i>
                      </div>
                      <div class="media-body pr-10">
                        <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                        <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                      <div class="ml-5 mr-15">
                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                      </div>
                      <div class="media-body pr-10">
                        <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                        <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                      <div class="ml-5 mr-15">
                        <i class="fa fa-fw fa-plus text-primary"></i>
                      </div>
                      <div class="media-body pr-10">
                        <p class="mb-0">New purchases! +$250</p>
                        <div class="text-muted font-size-sm font-italic">1 day ago</div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                  <i class="fa fa-flag mr-5"></i> View All
                </a>
              </div>
            </div> --}}
            <!-- END Notifications -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        {{-- <div id="page-header-search" class="overlay-header">
          <div class="content-header content-header-fullrow">
            <form action="be_pages_generic_search.html" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- Close Search Section -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-times"></i>
                  </button>
                  <!-- END Close Search Section -->
                </div>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div> --}}
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
              <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        @yield('content')
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
    @yield('javascript')
  </body>
</html>