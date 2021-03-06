<?php
/*
 * PushPress SDK
 * v1.1.01
 */
 
// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('Pushpress needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Pushpress needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('Pushpress needs the Multibyte String PHP extension.');
}
// Pushpress singleton
require(dirname(__FILE__) . '/Pushpress/Pushpress.php');

// Utilities
require(dirname(__FILE__) . '/Pushpress/Util.php');
require(dirname(__FILE__) . '/Pushpress/Util/Set.php');

// Errors
require(dirname(__FILE__) . '/Pushpress/Error/Error.php');
require(dirname(__FILE__) . '/Pushpress/Error/ApiError.php');
require(dirname(__FILE__) . '/Pushpress/Error/ApiConnectionError.php');
require(dirname(__FILE__) . '/Pushpress/Error/AuthenticationError.php');
require(dirname(__FILE__) . '/Pushpress/Error/InvalidRequestError.php'); 

// Plumbing
require(dirname(__FILE__) . '/Pushpress/Object.php');
require(dirname(__FILE__) . '/Pushpress/ApiRequestor.php');
require(dirname(__FILE__) . '/Pushpress/ApiResource.php');
require(dirname(__FILE__) . '/Pushpress/SingletonApiResource.php');
require(dirname(__FILE__) . '/Pushpress/AttachedObject.php');
require(dirname(__FILE__) . '/Pushpress/List.php');

// Pushpress API Resources
require(dirname(__FILE__) . '/Pushpress/Activity.php');
require(dirname(__FILE__) . '/Pushpress/App.php');
require(dirname(__FILE__) . '/Pushpress/Billing.php');
require(dirname(__FILE__) . '/Pushpress/Calendar.php');
require(dirname(__FILE__) . '/Pushpress/CalendarItemRating.php');
require(dirname(__FILE__) . '/Pushpress/CalendarType.php');
require(dirname(__FILE__) . '/Pushpress/Checkin.php');
require(dirname(__FILE__) . '/Pushpress/Client.php');
require(dirname(__FILE__) . '/Pushpress/Contract.php');
require(dirname(__FILE__) . '/Pushpress/Customer.php');
require(dirname(__FILE__) . '/Pushpress/Document.php');
require(dirname(__FILE__) . '/Pushpress/Discount.php');
require(dirname(__FILE__) . '/Pushpress/Invoice.php');
require(dirname(__FILE__) . '/Pushpress/InvoiceItem.php');
require(dirname(__FILE__) . '/Pushpress/Message.php');
require(dirname(__FILE__) . '/Pushpress/MessageLog.php');
require(dirname(__FILE__) . '/Pushpress/MetricsCoach.php');
require(dirname(__FILE__) . '/Pushpress/Order.php');
require(dirname(__FILE__) . '/Pushpress/Partner.php');
require(dirname(__FILE__) . '/Pushpress/Payrate.php');
require(dirname(__FILE__) . '/Pushpress/PayrollItem.php');
require(dirname(__FILE__) . '/Pushpress/PayrollReport.php');
require(dirname(__FILE__) . '/Pushpress/Plan.php');
require(dirname(__FILE__) . '/Pushpress/PlanCalendarItemType.php');
require(dirname(__FILE__) . '/Pushpress/PlanCategory.php');
require(dirname(__FILE__) . '/Pushpress/Preorder.php');
require(dirname(__FILE__) . '/Pushpress/Product.php');
require(dirname(__FILE__) . '/Pushpress/ProductCategories.php');
require(dirname(__FILE__) . '/Pushpress/Registration.php');
require(dirname(__FILE__) . '/Pushpress/Report.php');
require(dirname(__FILE__) . '/Pushpress/User.php');
require(dirname(__FILE__) . '/Pushpress/SchedulerCredit.php');
require(dirname(__FILE__) . '/Pushpress/SchedulerType.php');
require(dirname(__FILE__) . '/Pushpress/SchedulerRate.php');
require(dirname(__FILE__) . '/Pushpress/Subscriptions.php');
require(dirname(__FILE__) . '/Pushpress/SubscriptionPayroll.php');
require(dirname(__FILE__) . '/Pushpress/SubscriptionContract.php');
require(dirname(__FILE__) . '/Pushpress/TaxRates.php');
require(dirname(__FILE__) . '/Pushpress/Token.php');
require(dirname(__FILE__) . '/Pushpress/Track.php');
require(dirname(__FILE__) . '/Pushpress/TrackBenchmark.php');
require(dirname(__FILE__) . '/Pushpress/TrackBenchmarkResult.php');
require(dirname(__FILE__) . '/Pushpress/TrackWorkout.php');
require(dirname(__FILE__) . '/Pushpress/TrackFavoriteWorkout.php');
require(dirname(__FILE__) . '/Pushpress/TrackScoringType.php');
require(dirname(__FILE__) . '/Pushpress/TrackWorkoutType.php');
require(dirname(__FILE__) . '/Pushpress/UserImage.php');
require(dirname(__FILE__) . '/Pushpress/UserTip.php');
require(dirname(__FILE__) . '/Pushpress/Waiver.php');
require(dirname(__FILE__) . '/Pushpress/Workout.php');
require(dirname(__FILE__) . '/Pushpress/UserDocument.php');
require(dirname(__FILE__) . '/Pushpress/UserWaiver.php');
