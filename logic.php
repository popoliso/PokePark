<?php

// This is a transitional package.
// Any new logic functions should be included directly where they are needed,
// NOT via this file!

include('logic/active_raid_duplication_check.php');
include('logic/alarm.php');
include('logic/check_time.php');
include('logic/cp_keys.php');
include('logic/curl_json_response.php');
include('logic/delete_gym.php');
include('logic/delete_raid.php');
include('logic/delete_trainerinfo.php');
include('logic/disable_raid_level.php');
include('logic/edit_pokedex_keys.php');
include('logic/get_chat_title.php');
include('logic/get_formatted_pokemon_cp.php');
include('logic/get_gym_by_telegram_id.php');
include('logic/get_gym_details.php');
include('logic/get_gym.php');
include('logic/get_local_pokemon_name.php');
include('logic/get_overview.php');
include('logic/get_pokemon_cp.php');
include('logic/get_pokemon_form_name.php');
include('logic/get_pokemon_id_by_name.php');
include('logic/get_pokemon_info.php');
include('logic/get_pokemon_weather.php');
include('logic/get_pokemon_shiny_status.php');
include('logic/get_raid_level.php');
include('logic/get_raid.php');
include('logic/get_raid_times.php');
include('logic/get_raid_with_pokemon.php');
include('logic/get_remote_users_count.php');
include('logic/get_user.php');
include('logic/get_weather_icons.php');
include('logic/group_code_keys.php');
include('logic/insert_cleanup.php');
include('logic/insert_gym.php');
include('logic/insert_overview.php');
include('logic/insert_trainerinfo.php');
include('logic/keys_trainerinfo.php');
include('logic/keys_vote.php');
include('logic/mapslink.php');
include('logic/pokemon_keys.php');
include('logic/raid_access_check.php');
include('logic/raid_edit_gym_keys.php');
include('logic/raid_edit_gyms_first_letter_keys.php');
include('logic/raid_edit_raidlevel_keys.php');
include('logic/raid_get_gyms_list_keys.php');
include('logic/raid_list.php');
include('logic/raid_poll_message.php');
include('logic/run_cleanup.php');
include('logic/sendalarm.php');
include('logic/sendalarmnotice.php');
include('logic/sendcode.php');
include('logic/send_response_vote.php');
include('logic/send_trainerinfo.php');
include('logic/send_vote_remote_users_limit_reached.php');
include('logic/send_vote_time_first.php');
include('logic/send_vote_time_future.php');
include('logic/show_raid_poll.php');
include('logic/show_raid_poll_small.php');
include('logic/show_trainerinfo.php');
include('logic/weather_keys.php');
include('logic/curl_get_contents.php');
//
// NEW E
include('logic/new/edit_usermenu_keys.php');
include('logic/new/edit_save_id_grupo.php');
// NEW G
include('logic/new/get_grupos_bdd.php'); // para lgtipo
include('logic/new/get_user_bdd.php');
include('logic/new/get_user_menu.php'); // NEW
// NEW I
include('logic/new/invite_sendfin.php');
include('logic/new/invite_senduser.php');
// NEW K
include('logic/new/keys_vote_pokeraids.php');
include('logic/new/keys_vote_pokeraids_cp.php');
include('logic/new/keys_vote_pikachu.php');
include('logic/new/keys_vote_zubot.php');
include('logic/new/keys_vote_generico.php');
// NEW N
include('logic/new/n_raid_get_gyms_list_keys.php');
include('logic/new/n_raid_edit_gyms_first_letter_keys.php');
// NEW S
include('logic/new/send_invita.php');
include('logic/new/show_raid_poll_pokeraids.php');
include('logic/new/show_raid_poll_pokeraids_cp.php');
include('logic/new/show_raid_poll_pikachu.php');
include('logic/new/show_raid_poll_zubot.php');
include('logic/new/show_raid_poll_generico.php');
//
include('logic/new/show_raid_poll_small_pokeraids.php');
include('logic/new/show_raid_poll_small_pokeraids_cp.php');
include('logic/new/show_raid_poll_small_pikachu.php');
include('logic/new/show_raid_poll_small_zubot.php');
include('logic/new/show_raid_poll_small_generico.php');
// NEW T
include('logic/new/ttools_edit_keys.php'); 
// NEW U
include('logic/new/user_by_name.php');
include('logic/new/user_by_nick.php');
include('logic/new/user_by_idgrupo.php');
?>
