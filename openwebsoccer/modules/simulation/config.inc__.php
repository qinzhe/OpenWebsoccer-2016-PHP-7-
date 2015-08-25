<?php
$conf["db_host"] = "localhost";
$conf["db_user"] = "root";
$conf["db_passwort"] = "root";
$conf["db_name"] = "both";
$conf["db_prefix"] = "";
$conf["supported_languages"] = "de";
$conf["homepage"] = "http://localhost";
$conf["context_root"] = "/tlc";
$conf["projectname"] = "Mangetsu League";
$conf["systememail"] = "1@1.de";
$conf["upload_clublogo_max_size"] = "0";
$conf["rename_club_enabled"] = "";
$conf["session_lifetime"] = "7200";
$conf["time_zone"] = "Europe/Berlin";
$conf["time_offset"] = "0";
$conf["date_format"] = "d.m.Y";
$conf["datetime_format"] = "d.m.Y, H:i";
$conf["time_format"] = "H:i";
$conf["password_protected"] = "";
$conf["password_protected_startpage"] = "";
$conf["privacypolicy_url"] = "";
$conf["game_currency"] = "EUR";
$conf["offline"] = "online";
$conf["offline_text"] = "We are offline at the moment.";
$conf["offline_times"] = "";
$conf["addplyr"] = "AddPlayerWithoutTeamToTransfermarketJob";
$conf["extransf"] = "ExecuteTransfersJob";
$conf["sim"] = "SimulateMatchesJob";
$conf["usractv"] = "UserInactivityCheckJob";
$conf["stats"] = "UpdateStatisticsJob";
$conf["stadium"] = "AcceptStadiumConstructionWorkJob";
$conf["facebook_enable_login"] = "";
$conf["facebook_appid"] = "";
$conf["facebook_appsecret"] = "";
$conf["facebook_enable_comments"] = "";
$conf["facebook_enable_likebutton"] = "";
$conf["enable_player_resignation"] = "1";
$conf["player_resignation_compensation_matches"] = "10";
$conf["formation_max_next_matches"] = "3";
$conf["formation_max_templates"] = "10";
$conf["login_type"] = "username";
$conf["login_method"] = "DefaultUserLoginMethod";
$conf["login_allow_sendingpassword"] = "1";
$conf["assign_team_automatically"] = "1";
$conf["max_number_teams_per_user"] = "2";
$conf["additional_team_min_highscore"] = "100";
$conf["skin"] = "DefaultBootstrapSkin";
$conf["entries_per_page"] = "20";
$conf["head_code"] = "<style>
    body{
    padding-top: 120px;
    padding-bottom: 80px;
}

</style>";
$conf["frontend_ads_hide_for_premiumusers"] = "";
$conf["frontend_ads_code_sidebar"] = "";
$conf["frontend_ads_code_top"] = "";
$conf["frontend_ads_code_bottom"] = "";
$conf["googleplus_enable_login"] = "";
$conf["googleplus_appname"] = "";
$conf["googleplus_clientid"] = "";
$conf["googleplus_clientsecret"] = "";
$conf["googleplus_developerkey"] = "";
$conf["googleplus_enable_likebutton"] = "";
$conf["gravatar_enable"] = "1";
$conf["joomlalogin_tableprefix"] = "_";
$conf["lending_enabled"] = "1";
$conf["lending_matches_min"] = "5";
$conf["lending_matches_max"] = "20";
$conf["messages_enabled"] = "1";
$conf["messages_break_minutes"] = "2";
$conf["no_transactions_for_teams_without_user"] = "";
$conf["nationalteams_enabled"] = "1";
$conf["notifications_max"] = "5";
$conf["contract_max_number_of_remaining_matches"] = "15";
$conf["hide_strength_attributes"] = "";
$conf["players_aging"] = "birthday";
$conf["premium_enabled"] = "";
$conf["premium_credit_unit"] = "Coins";
$conf["premium_infopage"] = "premium-feature-requested";
$conf["premium_price_options"] = "5:10,20:50,50:150";
$conf["premium_currency"] = "EUR";
$conf["premium_initial_credit"] = "0";
$conf["premium_exchangerate_gamecurrency"] = "1000000";
$conf["micropayment_enabled"] = "";
$conf["micropayment_project"] = "";
$conf["micropayment_accesskey"] = "";
$conf["micropayment_call2pay_enabled"] = "";
$conf["micropayment_handypay_enabled"] = "";
$conf["micropayment_ebank2pay_enabled"] = "";
$conf["micropayment_creditcard_enabled"] = "";
$conf["paypal_enabled"] = "";
$conf["paypal_receiver_email"] = "";
$conf["paypal_host"] = "www.paypal.com";
$conf["paypal_url"] = "ssl://www.paypal.com";
$conf["paypal_buttonhtml"] = "";
$conf["sofortcom_enabled"] = "";
$conf["sofortcom_configkey"] = "";
$conf["randomevents_interval_days"] = "10";
$conf["sim_noformation_oneteam"] = "computer";
$conf["sim_noformation_bothteams"] = "computer";
$conf["sim_createformation_without_manager"] = "1";
$conf["sim_createformation_without_manager_offensive"] = "50";
$conf["sim_createformation_on_invalidsubmission"] = "";
$conf["sim_createformation_strength"] = "100";
$conf["sim_income_trough_friendly"] = "1";
$conf["sim_injured_after_friendly"] = "1";
$conf["sim_tiredness_through_friendly"] = "1";
$conf["sim_playerupdate_through_nationalteam"] = "1";
$conf["sim_goaly_influence"] = "20";
$conf["sim_shootprobability"] = "100";
$conf["sim_cardsprobability"] = "100";
$conf["sim_injuredprobability"] = "100";
$conf["sim_weight_strength"] = "40";
$conf["sim_weight_strengthTech"] = "20";
$conf["sim_weight_strengthStamina"] = "20";
$conf["sim_weight_strengthFreshness"] = "10";
$conf["sim_weight_strengthSatisfaction"] = "10";
$conf["sim_strength_reduction_secondary"] = "10";
$conf["sim_strength_reduction_wrongposition"] = "50";
$conf["sim_home_field_advantage"] = "2";
$conf["sim_shootstrength_defense"] = "70";
$conf["sim_shootstrength_midfield"] = "90";
$conf["sim_shootstrength_striker"] = "100";
$conf["sim_block_player_after_yellowcards"] = "5";
$conf["sim_played_min_minutes"] = "10";
$conf["sim_decrease_freshness"] = "1";
$conf["sim_strengthchange_stamina"] = "1";
$conf["sim_strengthchange_satisfaction"] = "1";
$conf["sim_strengthchange_freshness_notplayed"] = "4";
$conf["sim_maxmatches_injured"] = "12";
$conf["sim_maxmatches_blocked"] = "5";
$conf["sim_allow_livechanges"] = "1";
$conf["sim_allow_offensivechanges"] = "2";
$conf["sim_interval"] = "150";
$conf["sim_max_matches_per_run"] = "182";
$conf["sim_strategy"] = "DefaultSimulationStrategy";
$conf["sim_simulation_observers"] = "MatchReportSimulationObserver";
$conf["sim_simulator_observers"] = "MatchReportSimulatorObserver,DataUpdateSimulatorObserver";
$conf["social_likebutton_twitter"] = "";
$conf["social_likebutton_werkenntwen"] = "";
$conf["social_likebutton_xing"] = "";
$conf["sponsor_matches"] = "15";
$conf["sponsor_earliest_matchday"] = "4";
$conf["stadium_max_grand"] = "60000";
$conf["stadium_max_side"] = "30000";
$conf["stadium_max_vip"] = "1000";
$conf["stadium_cost_standing"] = "100";
$conf["stadium_cost_seats"] = "200";
$conf["stadium_cost_standing_grand"] = "150";
$conf["stadium_cost_seats_grand"] = "300";
$conf["stadium_cost_vip"] = "2000";
$conf["stadium_construction_delay"] = "7";
$conf["stadium_hide_builders_reliability"] = "1";
$conf["stadium_maintenanceinterval_pitch"] = "2";
$conf["stadium_maintenanceinterval_videowall"] = "10";
$conf["stadium_maintenanceinterval_seatsquality"] = "5";
$conf["stadium_maintenanceinterval_vipquality"] = "5";
$conf["stadium_pitch_price"] = "10000";
$conf["stadium_videowall_price"] = "100000";
$conf["stadium_seatsquality_price"] = "10";
$conf["stadium_vipquality_price"] = "50";
$conf["stadium_maintenance_priceincrease_per_level"] = "10";
$conf["stadium_pitch_effect"] = "1";
$conf["stadium_videowall_effect"] = "1";
$conf["stadium_seatsquality_effect"] = "2";
$conf["stadium_vipquality_effect"] = "5";
$conf["training_min_hours_between_execution"] = "24";
$conf["trainingcamp_min_days"] = "3";
$conf["trainingcamp_max_days"] = "5";
$conf["trainingcamp_booking_max_days_in_future"] = "30";
$conf["transfermarket_enabled"] = "1";
$conf["transfermarket_duration_days"] = "7";
$conf["transfermarket_computed_marketvalue"] = "1";
$conf["transfermarket_value_per_strength"] = "10000";
$conf["transfermarket_min_teamsize"] = "18";
$conf["transfermarket_max_transactions_between_users"] = "2";
$conf["transferoffers_enabled"] = "1";
$conf["transferoffers_transfer_stop_days"] = "30";
$conf["transferoffers_adminapproval_required"] = "";
$conf["transferoffers_contract_matches"] = "20";
$conf["authentication_mechanism"] = "SessionBasedUserAuthentication";
$conf["allow_userregistration"] = "";
$conf["registration_url"] = "";
$conf["register_use_captcha"] = "";
$conf["register_captcha_publickey"] = "-";
$conf["register_captcha_privatekey"] = "-";
$conf["max_number_of_users"] = "0";
$conf["illegal_usernames"] = "admin,administrator,test";
$conf["user_picture_upload_enabled"] = "1";
$conf["user_picture_upload_maxsize_kb"] = "512";
$conf["highscore_win"] = "5";
$conf["highscore_draw"] = "3";
$conf["highscore_loss"] = "1";
$conf["webjobexecution_enabled"] = "1";
$conf["webjobexecution_key"] = "xyz";
$conf["wordpresslogin_tableprefix"] = "wp_";
$conf["youth_enabled"] = "1";
$conf["youth_scouting_enabled"] = "1";
$conf["youth_matchrequests_enabled"] = "1";
$conf["youth_min_age_professional"] = "16";
$conf["youth_salary_per_strength"] = "50";
$conf["youth_scouting_break_hours"] = "24";
$conf["youth_scouting_success_probability"] = "75";
$conf["youth_scouting_min_strength"] = "5";
$conf["youth_scouting_max_strength"] = "70";
$conf["youth_scouting_standard_deviation"] = "5";
$conf["youth_scouting_min_age"] = "14";
$conf["youth_professionalmove_matches"] = "30";
$conf["youth_professionalmove_technique"] = "50";
$conf["youth_professionalmove_stamina"] = "60";
$conf["youth_professionalmove_freshness"] = "100";
$conf["youth_professionalmove_satisfaction"] = "100";
$conf["youth_matchrequest_max_open_requests"] = "2";
$conf["youth_matchrequest_max_futuredays"] = "14";
$conf["youth_matchrequest_allowedtimes"] = "14:00,15:00";
$conf["youth_matchrequest_accept_hours_in_advance"] = "2";
$conf["youth_match_maxperday"] = "1";
$conf["youth_strengthchange_verygood"] = "2";
$conf["youth_strengthchange_good"] = "1";
$conf["youth_strengthchange_bad"] = "-1";
$conf["youth_strengthchange_verybad"] = "-2";
$conf["sim_auto_deblock"] = "1";
$conf["jobxmlsetlow"] = "1385";
$conf["jobxmlsethigh"] = "1444";
$conf["transferoffersbetweenownteams_enabled"] = "0";
$conf["friendlies_on_off"] = "1";
$conf["friendlies_time_difference"] = "20";
$conf["friendlies_per_day"] = "3";
$conf["friendlies_nationalteam_on_off"] = "";
$conf["friendlies_bonus"] = "";
$conf["friendlies_bonus_win"] = "1000";
$conf["friendlies_bonus_draw"] = "500";
$conf["friendlies_bonus_loss"] = "250";
$conf["hide_market_values"] = "";
$conf["teamnews_on_off"] = "1";
$conf["teamnews_maxlength"] = "500";
$conf["teamnews_per_page"] = "5";
$conf["tv_matches"] = "15";
$conf["tv_earliest_matchday"] = "4";
$conf["externlink1"] = "";
$conf["externlink1txt"] = "";
$conf["externlink2"] = "";
$conf["externlink2txt"] = "";
?>