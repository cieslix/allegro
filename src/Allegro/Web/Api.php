<?php

/**
 * Class Allegro_Web_Api
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api extends Allegro_Web_Api_ServiceService
{
    /**
     * This method allows for adding common, additional text to offer descriptions listed by a logged user. The content of the added text will be displayed under the right description with the "Added" annotation as well as date and hour of posting it.
     * @todo test
     * @link http://allegro.pl/webapi/documentation.php/show/id,1076?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers to which a common text is to be added (max. 25).
     * @param string                            $itDescription Content of a text to be added.
     * @return Allegro_Web_Api_DoAddDescToItemsResponse
     */
    public function addDescToItems($sessionId, $itemIds, $itDescription)
    {
        $parameters = new Allegro_Web_Api_DoAddDescToItemsRequest($sessionId, $itemIds, $itDescription);
        return $this->doAddDescToItems($parameters);
    }

    /**
     * This method allows seller to add information on delivery to the after-sale form filled-out by a package recipient (up to 20 information on delivery can be added to each form).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1188?lang=en
     *
     * @param string                                   $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int                                      $transactionId Transaction (after-sale form) identifier received by using the doGetTransactionsIDs method.
     * @param Allegro_Web_Api_ArrayOfPackageinfostruct $packageInfo Array of structures containing information on parcel (max. 20 for each transaction).
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse Structure containing information on operation results
     */
    public function addPackageInfoToPostBuyForm($sessionId, $transactionId, Allegro_Web_Api_ArrayOfPackageinfostruct $packageInfo)
    {
        $parameters = new Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest($sessionId, $transactionId, $packageInfo);
        return $this->doAddPackageInfoToPostBuyForm($parameters);
    }

    /**
     * This method allows for adding indicated users to a blacklist. Users from the blacklist cannot buy items from the owner of the list.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1077?lang=en
     *
     * @param string                                     $sessionId
     * @param Allegro_Web_Api_ArrayOfUserblackliststruct $usersBlackListArray
     * @return Allegro_Web_Api_DoAddToBlackListResponse
     */
    public function addToBlackList($sessionId, Allegro_Web_Api_ArrayOfUserblackliststruct $usersBlackListArray)
    {
        $parameters = new Allegro_Web_Api_DoAddToBlackListRequest($sessionId, $usersBlackListArray);
        return $this->doAddToBlackList($parameters);
    }

    /**
     * This method allows a logged-in user to add indicated offers to the watch-list.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1186?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers to be added to watch-list (max. 25).
     * @return Allegro_Web_Api_DoAddToWatchListResponse
     */
    public function addToWatchList($sessionId, $itemIds)
    {
        $parameters = new Allegro_Web_Api_DoAddToWatchListRequest($sessionId, $itemIds);
        return $this->doAddToWatchList($parameters);
    }

    /**
     * This method allows for making a bid in an ongoing offer.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1138?lang=en
     *
     * @param string                                      $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int                                         $bidItId Identifier of an offer in which you wish to make a bid.
     * @param float                                       $bidUserPrice Bid price (for offers of a bidding type). For offers of the Buy it Now! type the field must pass a price that equals the Buy it Now! price set by a seller, displayed in the ongoing offer.
     * @param int                                         $bidQuantity Number of items related to the made bid (also in multi-variant offers).
     * @param int                                         $bidBuyNow Information whether the purchase has to be made through But it Now! (the offer has to have such purchase method available). (1 - yes, 0 - no; default value is 0).
     * @param Allegro_Web_Api_PharmacyRecipientDataStruct $pharmacyRecipientData Structure containing address data of a buyer (relates to the category: Health and Beauty > OTC drugs; Filling out this structure while making purchase in other category results in ignoring the passed data).
     * @param string                                      $variantId Identifier of a purchased variant that is received after using the doShowItemInfoExt method.
     * @return Allegro_Web_Api_DoBidItemResponse
     */
    public function bidItem($sessionId, $bidItId, $bidUserPrice, $bidQuantity,
                            $bidBuyNow = Allegro_Web_Api_DoBidItemRequest::BID_BUY_NOW_YES,
                            Allegro_Web_Api_PharmacyRecipientDataStruct $pharmacyRecipientData = null, $variantId = null)
    {
        $parameters = new Allegro_Web_Api_DoBidItemRequest($sessionId, $bidItId, $bidUserPrice, $bidQuantity, $bidBuyNow, $pharmacyRecipientData, $variantId);
        return $this->doBidItem($parameters);
    }

    /**
     * This method allows for cancelling bids made in the offer of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1157?lang=en
     *
     * @param string                           $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int                              $cancelItemId Offer identifier.
     * @param Allegro_Web_Api_ArrayOfInt|int[] $cancelBidsArray Array of identifiers of buyers whose offers are to be cancelled.
     * @param string                           $cancelBidsReason Bid cancellation reason.
     * @param int                              $cancelAddToBlackList Information whether bids cancellation should result in adding buyers to blacklist of a logged-in user (1 - yes, 0 - no; default value is 0).
     * @return Allegro_Web_Api_DoCancelBidItemResponse
     */
    public function cancelBidItem($sessionId, $cancelItemId, $cancelBidsArray,
                                  $cancelBidsReason, $cancelAddToBlackList)
    {
        $parameters = new Allegro_Web_Api_DoCancelBidItemRequest($sessionId, $cancelItemId, $cancelBidsArray,
            $cancelBidsReason, $cancelAddToBlackList);
        return $this->doCancelBidItem($parameters);
    }

    /**
     * This method is for cancelling the commission refund form. When the refund procedure related to a given transaction is cancelled, it is impossible to request for the commission refund once again.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1482?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $refundId Commission refund form ID.
     * @return Allegro_Web_Api_DoCancelRefundFormResponse.
     */
    public function cancelRefundForm($sessionId, $refundId)
    {
        $parameters = new Allegro_Web_Api_DoCancelRefundFormRequest($sessionId, $refundId);
        return $this->doCancelRefundForm($parameters);
    }

    /**
     * This method is for cancelling warnings. When the warning related to a given transaction is cancelled, it is impossible to request for the commission refund once again. Warning cancellation results in charging the success fee once again.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1463?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $refundId Commission refund form ID.
     * @return Allegro_Web_Api_DoCancelRefundWarningResponse Confirming commission refund form cancellation (1).
     */
    public function cancelRefundWarning($sessionId, $refundId)
    {
        $parameters = new Allegro_Web_Api_DoCancelRefundWarningRequest($sessionId, $refundId);
        return $this->doCancelRefundWarning($parameters);
    }

    /**
     * This method allows the buyer to cancel an initiated PayU payment.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1302?lang=en
     *
     * @param string $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param int    $transactionId Transaction identifier.
     * @return Allegro_Web_Api_DoCancelTransactionResponse Confirming commission refund form cancellation (1).
     */
    public function cancelTransaction($sessionId, $transactionId)
    {
        $parameters = new Allegro_Web_Api_DoCancelTransactionRequest($sessionId, $transactionId);
        return $this->doCancelTransaction($parameters);
    }

    /**
     *﻿This method allows for comprehensive offer editing both listed and planned to be listed. In order to add elements to the offer or change them, you need to pass data of selected fields of the fieldsToModify structure. To remove elements you need to pass data of selected fields of the fieldsToRemove structure. A list of fields available in the offer can be loaded by using the doGetItemFields method. When bids appear majority of fields is blocked to changes (e.g. description). In such case you can add an additional description in the fid: 25. This method allows for editing the offer and simulating it – the previewOnly field sets the method's mechanics.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1190?lang=en
     *
     * @param string                               $sessionId
     * @param int                                  $itemId
     * @param Allegro_Web_Api_ArrayOfFieldsvalue   $fieldsToModify
     * @param Allegro_Web_Api_ArrayOfInt|int[]     $fieldsToRemove
     * @param int                                  $previewOnly
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     * @return Allegro_Web_Api_DoChangeItemFieldsResponse
     */
    public function changeItemFields($sessionId, $itemId, $fieldsToModify = null,
                                     $fieldsToRemove = array(), $previewOnly = null, $variants = null)
    {
        $parameters = new Allegro_Web_Api_DoChangeItemFieldsRequest($sessionId, $itemId, $fieldsToModify,
            $fieldsToRemove, $previewOnly, $variants);
        return $this->doChangeItemFields($parameters);
    }

    /**
     * This method allows for changing prices available in the offer. It is required to provide expected values of all three prices (even if only one of them is to be changed, parameters related to two other prices should contain their current value). Passing 0 disables the indicated price in the offer.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1151?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier
     * @param float  $newStartingPrice New value of the starting price.
     * @param float  $newReservePrice New value of the reserve price.
     * @param float  $newBuyNowPrice New value of the Buy it Now! price.
     * @return Allegro_Web_Api_DoChangePriceItemResponse
     */
    public function changePriceItem($sessionId, $itemId, $newStartingPrice = null, $newReservePrice = null, $newBuyNowPrice = null)
    {
        $parameters = new Allegro_Web_Api_DoChangePriceItemRequest($sessionId, $itemId, $newStartingPrice,
            $newReservePrice, $newBuyNowPrice);
        return $this->doChangePriceItem($parameters);
    }

    /**
     * This method allows for changing the number of items available in an offer of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1150?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier.
     * @param int    $newItemQuantity New value for initial number of items in the offer.
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function changeQuantityItem($sessionId, $itemId, $newItemQuantity)
    {
        $parameters = new Allegro_Web_Api_DoChangeQuantityItemRequest($sessionId, $itemId, $newItemQuantity);
        return $this->doChangeQuantityItem($parameters);
    }

    /**
     * This method allows to validate the input description to meet Allegro standards. The output description can then be used when making a new offer, without the fear that it will be additionally modified during the process by description validators activated automatically.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1187?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string $descriptionContent Description of an offer to be validated.
     * @return Allegro_Web_Api_DoCheckItemDescriptionResponse Validated offer description.
     */
    public function checkItemDescription($sessionId, $descriptionContent)
    {
        $parameters = new Allegro_Web_Api_DoCheckItemDescriptionRequest($sessionId, $descriptionContent);
        return $this->doCheckItemDescription($parameters);
    }

    /**
     * This method allows for checking general and detailed costs related to listing an offer before making the actual listing. This method can also serve as a test for correctness of listed offers as the structure of fields taken as a parameter is the same as the the one taken by doNewAuctionExt.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1081?lang=en
     *
     * @param string                               $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFieldsvalue   $fields Array of structures containing information on sale form fields (their list can be loaded by using the doGetSellFormFieldsExt(Limit) method. When an identifier of a particular field is passed in the fid field, you need to send its value in an appropriate for its type fvalue field and pass empty string of characters [string] - sending 0 (numeric types) or logical value 'false' [boolean] in other fvalue fields. Pass only required or desired fields.
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants (missing in documentation)
     * @return Allegro_Web_Api_DoCheckNewAuctionExtResponse
     */
    public function checkNewAuctionExt($sessionId, Allegro_Web_Api_ArrayOfFieldsvalue $fields,
                                       Allegro_Web_Api_ArrayOfVariantstruct $variants = null)
    {
        $parameters = new Allegro_Web_Api_DoCheckNewAuctionExtRequest($sessionId, $fields, $variants);
        return $this->doCheckNewAuctionExt($parameters);
    }

    /**
     *﻿This method allows for creating and saving an offer template to a logged-in user account. Each user can have up to 10 own offer templates.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1133?lang=en
     *
     * @param string                             $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string                             $itemTemplateName Name of an offer template (max. 50 characters).
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields Array of structures containing information on settings of sale form fields forming the offer template.
     * @return Allegro_Web_Api_DoCreateItemTemplateResponse Identifier of an offer template.
     */
    public function createItemTemplate($sessionId, $itemTemplateName, $itemTemplateFields)
    {
        $parameters = new Allegro_Web_Api_DoCreateItemTemplateRequest($sessionId, $itemTemplateName, $itemTemplateFields);
        return $this->doCreateItemTemplate($parameters);
    }

    /**
     * This method allows for leaving feedback for a user being the other party of a transaction. Is a person leaving the comment is a buyer, he/she is also obliged to evaluate the sale’s particular areas. This method also allows for using a template for positive comments (always available in language used in a country to which a user is logged) instead of writing the content each time (in such case the manually written content will be replaced by the template).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1082?lang=en
     *
     * @param string                                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int                                               $feItemId Identifier of an offer which will receive feedback.
     * @param int                                               $feUseCommentTemplate Information on whether the space for typing in a positive comment (only for feCommentType=POS) should be filled with a standard feedback template prepared by Allegro: Transaction successful. I recommend. (1 - use template, 0 - type in positive comment).
     * @param int                                               $feToUserId Identifier of a user who will receive feedback.
     * @param string                                            $feComment Feedback content (about 250 characters).
     * @param string                                            $feCommentType Type of feedback (POS - positive, NEG - negative, NEU - neutral).
     * @param int                                               $feOp Side which will receive feedback (1 - feedback for seller, 2 - feedback for buyer).
     * @param Allegro_Web_Api_ArrayOfSellratingestimationstruct $feRating Array of structures containing information on evaluation of selected sale areas.
     * @return Allegro_Web_Api_DoFeedbackResponse Left feedback identifier.
     */
    public function feedback($sessionId, $feItemId, $feUseCommentTemplate = Allegro_Web_Api_DoFeedbackRequest::USE_TEMPLATE_NO,
                             $feToUserId, $feComment, $feCommentType = Allegro_Web_Api_DoFeedbackRequest::FEEDBACK_TYPE_POS,
                             $feOp = Allegro_Web_Api_DoFeedbackRequest::FEEDBACK_FOR_BUYER,
                             Allegro_Web_Api_ArrayOfSellratingestimationstruct $feRating)
    {
        $parameters = new Allegro_Web_Api_DoFeedbackRequest($sessionId, $feItemId, $feUseCommentTemplate, $feToUserId,
            $feComment, $feCommentType, $feOp, $feRating);
        return $this->doFeedback($parameters);
    }

    /**
     * This method allows to leave many feedbacks at once to users taking part in transactions. When buyers leaves feedback, he/she is also obliged to evaluate the sale’s particular areas. This method also allows for using a positive feedbacks template (always available in language used in a country to which a user is logged-in) instead of writing the content (in such case the manually written content will be replaced by the template).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1095?lang=en
     *
     * @param string                                    $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFeedbackmanystruct $feedbacksList Array of structures containing information required to leave feedback (max. 25).
     * @return Allegro_Web_Api_DoFeedbackManyResponse Array of structures containing information on operation results.
     */
    public function feedbackMany($sessionId, Allegro_Web_Api_ArrayOfFeedbackmanystruct $feedbacksList)
    {
        $parameters = new Allegro_Web_Api_DoFeedbackManyRequest($sessionId, $feedbacksList);
        return $this->doFeedbackMany($parameters);
    }

    /**
     * This method allows for closing the offer (both ongoing and scheduled for listing) of a logged-in user before scheduled time (with or without cancellation of bids).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1122?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $finishItemId Offer identifier.
     * @param int    $finishCancelAllBids Information on whether bids are to be cancelled together with closing the offer (1 - yes, 0 - no; default value is 0; only bids placed in the bidding process are cancelled).
     * @param string $finishCancelReason Reason for cancellation of bids.
     * @return Allegro_Web_Api_DoFinishItemResponse Operation result (1 - offer has been ended, 0 - offer has not been ended).
     */
    public function finishItem($sessionId, $finishItemId, $finishCancelAllBids = null, $finishCancelReason = null)
    {
        $parameters = new Allegro_Web_Api_DoFinishItemRequest($sessionId, $finishItemId, $finishCancelAllBids, $finishCancelReason);
        return $this->doFinishItem($parameters);
    }

    /**
     * This method allows for closing many offers (both ongoing and scheduled for listing) of a logged-in user before scheduled time (with or without cancellation of bids).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1069?lang=en
     *
     * @param string                                   $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFinishitemsstruct $finishItemsList Arrays with structures containing information of offers to be closed (max. 25).
     * @return Allegro_Web_Api_DoFinishItemsResponse
     */
    public function finishItems($sessionId, Allegro_Web_Api_ArrayOfFinishitemsstruct $finishItemsList)
    {
        $parameters = new Allegro_Web_Api_DoFinishItemsRequest($sessionId, $finishItemsList);
        return $this->doFinishItems($parameters);
    }

    /**
     * This method allows the key owner to load the expiry date of a license belonging to an indicated user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1182?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string $userLicLogin Username.
     * @return Allegro_Web_Api_DoGetAdminUserLicenceDateResponse User's license expiration date (in the Unix time format)
     */
    public function getAdminUserLicenceDate($sessionId, $userLicLogin)
    {
        $parameters = new Allegro_Web_Api_DoGetAdminUserLicenceDateRequest($sessionId, $userLicLogin);
        return $this->doGetAdminUserLicenceDate($parameters);
    }

    /**
     * This method is for retrieving commission refund forms for archived offers that received a warning (up to 180 days after receiving one). An empty structure will be returned in the case of retrieving an ID of an offer that has not received any warning.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1486?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer ID.
     * @return Allegro_Web_Api_DoGetArchiveRefundsListResponse
     */
    public function getArchiveRefundsList($sessionId, $itemId)
    {
        $parameters = new Allegro_Web_Api_DoGetArchiveRefundsListRequest($sessionId, $itemId);
        return $this->doGetArchiveRefundsList($parameters);
    }

    /**
     * This method allows for loading publicly available information on all users who have participated in the given offer and made a purchase. List of names and user identifiers are available for users who have listed the given offer - others will see the mentioned data in an anonymous form.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1097?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier.
     * @return Allegro_Web_Api_DoGetBidItem2Response Array of structures containing information on all buyers in an offer.
     */
    public function getBidItem($sessionId, $itemId)
    {
        $parameters = new Allegro_Web_Api_DoGetBidItem2Request($sessionId, $itemId);
        return $this->doGetBidItem2($parameters);
    }

    /**
     * ﻿This method allows for loading a list of users added to blacklists by the logged-in user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1098?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetBlackListUsersResponse Array of structures containing information on users added to the blacklist.
     */
    public function getBlackListUsers($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetBlackListUsersRequest($sessionId);
        return $this->doGetBlackListUsers($parameters);
    }

    /**
     *﻿This method allows for loading category path for the category identifier provided on call.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1121?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $categoryId Category identifier.
     * @return Allegro_Web_Api_DoGetCategoryPathResponse
     */
    public function getCategoryPath($sessionId, $categoryId)
    {
        $parameters = new Allegro_Web_Api_DoGetCategoryPathRequest($sessionId, $categoryId);
        return $this->doGetCategoryPath($parameters);
    }

    /**
     * This method allows for loading a full tree of categories available in a selected country.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1101?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetCatsDataResponse
     */
    public function getCatsData($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetCatsDataRequest($countryId, 0, $webapiKey); // middle parameter is depreciated
        return $this->doGetCatsData($parameters);
    }

    /**
     *﻿This method allows for loading the counter of categories available in the selected country.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1102?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetCatsDataCountResponse
     */
    public function getCatsDataCount($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetCatsDataCountRequest($countryId, 0, $webapiKey); // middle parameter is depreciated
        return $this->doGetCatsDataCount($parameters);
    }

    /**
     * This method allows for loading in portions the full tree of categories available in the indicated country. 50 elements are returned by default. The size of portion can be regulated by the packageElement parameter and the offset parameter allows to control the process of loading next portions of data.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1086?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $limit Parameter which allows for defining a size of data portion (scope 1-5000; 5000 by default).
     * @param int    $offset Parameter which allows for controlling loading of new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetCatsDataLimitResponse
     */
    public function getCatsDataLimit($webapiKey, $countryId, $limit = 5000, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetCatsDataLimitRequest($countryId, 0, $webapiKey, $offset, $limit); // middle parameter is depreciated
        return $this->doGetCatsDataLimit($parameters);
    }


    /**
     * This method allows for loading a list of all countries available on the platform.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1085?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier.
     * @return Allegro_Web_Api_DoGetCountriesResponse Array of structures containing information on available countries.
     */
    public function getCountries($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetCountriesRequest($countryId, $webapiKey);
        return $this->doGetCountries($parameters);
    }

    /**
     * This method allows for loading single purchase events concluded by a given buyer in an indicated offer (in which a logged-in user acts as the seller). That method returns only purchase events which is not paid yet while calling the method. The exception is a situation when a purchase had been paid for but the payment has been cancelled - that purchase is treated as unpaid and information about it will be returned. In case of providing an incorrect user identifier an empty structure is returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1163?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier.
     * @param int    $buyerId Buyer's identifier.
     * @return Allegro_Web_Api_DoGetDealsResponse Array of structures containing information on purchase events.
     */
    public function getDeals($sessionId, $itemId, $buyerId)
    {
        $parameters = new Allegro_Web_Api_DoGetDealsRequest($sessionId, $itemId, $buyerId);
        return $this->doGetDeals($parameters);
    }

    /**
     * This method allows to load the list of favourite categories of a logged user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1087?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetFavouriteCategoriesResponse Array of structures containing information on user's favourite categories.
     */
    public function getFavouriteCategories($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetFavouriteCategoriesRequest($sessionId);
        return $this->doGetFavouriteCategories($parameters);
    }

    /**
     * This method allows for loading list of favourite sellers of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1090?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetFavouriteSellersResponse
     */
    public function getFavouriteSellers($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetFavouriteSellersRequest($sessionId);
        return $this->doGetFavouriteSellers($parameters);
    }

    /**
     * This method allows for loading information on feedback left or received by any user. By default, the full list (or limited to a certain type) of feedback is returned, sorted descending by time when they were left. The initial place to start loading the list of feedback can be controlled using the feedbackOffset parameter. You need to provide user’s identifier in only one parameter: feedbackFrom or feedbackTo. The first one - when you want to load information on feedback left by a user. The second one - when you want to load information on feedback received by a user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1092?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $feedbackFrom User's identifier - in case when information on feedback left by the given user is to be loaded.
     * @param int    $feedbackTo User's identifier - in case when information on feedback received by the given user is to be loaded.
     * @param int    $feedbackOffset Parameter which allows for setting the initial position to start loading the feedback list. The parameter's value indicates feedback (taking into account the method of sorting the list - descending sort by the date of posting) to start loading the list with (feedback is indexed from 0).
     * @param string $feedbackKindList Type of returned feedback list (POS - positive, NEG - negative, NEU - neutral, ALL - all; ALL is set by default).
     * @return Allegro_Web_Api_DoGetFeedbackResponse
     */
    public function getFeedback($sessionId, $feedbackFrom = 0, $feedbackTo = 1, $feedbackOffset = 0,
                                $feedbackKindList = Allegro_Web_Api_DoGetFeedbackRequest::KIND_TYPE_ALL)
    {
        $parameters = new Allegro_Web_Api_DoGetFeedbackRequest($sessionId, $feedbackFrom, $feedbackTo, $feedbackOffset, $feedbackKindList);
        return $this->doGetFeedback($parameters);
    }

    /**
     * This method allows for loading identifiers of after-sales forms previously completed by a logged-in user (arranged chronologically - the latest on top). It can be used e.g. for pre-filling out a new form with data selected earlier by the user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1118?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $paymentType Payment method for which all delivery and payment option forms are to be returned (mask: 1 - PayU, 2 -standard transfer, 4 - COD).
     * @param int    $userRole Role of a logged-in user in a context of loaded forms (1 - seller, 2 - buyer).
     * @param int    $dateFrom Start date of time range (in the Unix time format) to load a list of filled-out after-sale forms.
     * @param int    $dateTo End date of time range (in the Unix time format) to stop loading a list of filled-out after-sale forms.
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsResponse Transaction ID array. Details of each transaction can be obtained using doGetPostBuyFormsDataForBuyers/doGetPostBuyFormsDataForSellers methods.
     */
    public function getFilledPostBuyForms($sessionId, $paymentType,
                                          $userRole = Allegro_Web_Api_DoGetFilledPostBuyFormsRequest::USER_ROLE_SELLER,
                                          $dateFrom = 0, $dateTo = 1)
    {
        $parameters = new Allegro_Web_Api_DoGetFilledPostBuyFormsRequest($sessionId, $paymentType, $userRole, $dateFrom, $dateTo);
        return $this->doGetFilledPostBuyForms($parameters);
    }

    /**
     * This method is for checking if a user has any free shipping limit set for the given country and downloading its value. If the limit is deactivated, 1 is returned in the activeFlag field.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,101562?lang=en
     *
     * @param string $webapiKey User’s WebAPI key.
     * @param int    $countryId ID of a country you wish to load the offers from (you can get a list of country IDs by using the doGetCountries method).
     * @param int    $userId Identifier of a user whose free shipping limit you want to check.
     * @return Allegro_Web_Api_DoGetFreeDeliveryAmountResponse
     */
    public function getFreeDeliveryAmount($webapiKey, $countryId, $userId)
    {
        $parameters = new Allegro_Web_Api_DoGetFreeDeliveryAmountRequest($userId, $countryId, $webapiKey);
        return $this->doGetFreeDeliveryAmount($parameters);
    }

    /**
     * This method allows for loading information on a logged user’s offer in a form of sale form fields. It will be possible to pass all data returned by the method in the fields structure for doNewAuctionExt input (as a result of which it will be possible to list a new offer on the basis of an ongoing one). It should be taken into account that images returned by this method will already be compressed by relevant mechanisms of offer listing and that the offer description will already be in the form verified by validators. It should also be remembered that input doNewAuctionExt and output doGetItemFields will never be identical, because doGetItemFields returns offers data in a form stored on the website and not in that sent by a user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1134?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier for which data should be returned.
     * @return Allegro_Web_Api_DoGetItemFieldsResponse
     */
    public function getItemFields($sessionId, $itemId)
    {
        $parameters = new Allegro_Web_Api_DoGetItemFieldsRequest($sessionId, $itemId);
        return $this->doGetItemFields($parameters);
    }

    /**
     * This method allows for loading templates of offers saved on an account of a logged user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1160?lang=en
     *
     * @param string                           $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfInt|int[] $itemTemplateIds Array of identifiers of offer templates (if it is empty, all templates of a logged-in user are returned).
     * @return Allegro_Web_Api_DoGetItemTemplatesResponse Structure containing information on offer templates.
     */
    public function getItemTemplates($sessionId, $itemTemplateIds = array())
    {
        $parameters = new Allegro_Web_Api_DoGetItemTemplatesRequest($sessionId, $itemTemplateIds);
        return $this->doGetItemTemplates($parameters);
    }

    /**
     * doesn't exist in documentation
     * @todo test
     *
     * @param string                            $sessionId
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemsArray
     * @param mixed                             $imageType
     * @return Allegro_Web_Api_DoGetItemsImagesResponse
     */
    public function getItemsImages($sessionId, $itemsArray, $imageType)
    {
        $parameters = new Allegro_Web_Api_DoGetItemsImagesRequest($sessionId, $itemsArray, $imageType);
        return $this->doGetItemsImages($parameters);
    }

    /**
     * This method allows for loading available information (description, category, photos, parameters, available delivery and payment methods, etc.) on indicated offers.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1093?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers to load information about (max. 25).
     * @param int                               $getDesc Parameter indicating whether an offer description is to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int                               $getImageUrl Parameter indicating whether links to photos are to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int                               $getAttribs Parameter indicating whether a list of parameters assigned to an offer is to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int                               $getPostageOptions Parameter indicating whether shipment options for an offer are to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int                               $getCompanyInfo Parameter indicating whether data of a user listing the offer is to be loaded (it refers only to offers listed from Company accounts) (1 - yes, 0 - no; default value: 0).
     * @return Allegro_Web_Api_DoGetItemsInfoResponse
     */
    public function getItemsInfo($sessionId, $itemIds, $getDesc = 0, $getImageUrl = 0, $getAttribs = 0,
                                 $getPostageOptions = 0, $getCompanyInfo = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetItemsInfoRequest($sessionId, $itemIds, $getDesc, $getImageUrl,
            $getAttribs, $getPostageOptions, $getCompanyInfo, 0);
        return $this->doGetItemsInfo($parameters);
    }

    /**
     * This method is for getting a complete set of information on offers available within all listings (category, user and special) as well as on a list of search results. You can filter the data in numerous ways (e.g. by a listing type, keyword and search details, price, offer type or category parameters) and sort them by any of the available types. By default (i.e. without specifying categorydepartment ID) a list of all main categories is returned (without any information on offers) and a list of fixed filters related to an offer listing (including the list of departments). The logic of the method is based on a system of filters returned contextually that allows for controlling the range of returned details. You can find a tutorial describing dynamic filters at: http://allegro.pl/webapi/tutorials/tutorial/id,321. This method returns data for the last two months (including ended auctions which have not been transferred to the archive yet).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1382?lang=en
     *
     * @param string                                   $webapiKey User’s WebAPI key.
     * @param int                                      $countryId ID of a country you wish to load the offers from (you can get a list of country IDs by using the doGetCountries method).
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions Criteria of filtering the results (a list of available in that certain context filters is returned as the output of the method within the  filtersList structure).
     * @param Allegro_Web_Api_SortOptionsType          $sortOptions Option of offer sorting.
     * @param int                                      $limit Size of data portion (min. 1, max. 1,000). Default value: 100.
     * @param int                                      $offset Controlling the process of getting another portion of data. Default value: 0.
     * @param int                                      $resultScope Controlling the range of returned data (mask, values can be added): 1 - do not return the structure with filters, 2 - do not return a structure with categories, 4 - do not return a structure with offers). All data are returned by default.
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function getItemsList($webapiKey, $countryId, Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions = null,
                                 Allegro_Web_Api_SortOptionsType $sortOptions = null, $limit = 100, $offset = 0,
                                 $resultScope = Allegro_Web_Api_DoGetItemsListRequest::RETURN_MASK_DEFAULT)
    {
        $parameters = new Allegro_Web_Api_DoGetItemsListRequest($webapiKey, $countryId, $filterOptions, $sortOptions,
            $limit, $offset, $resultScope);
        return $this->doGetItemsList($parameters);
    }

    /**
     * This method allows for loading messages from a buyer (whose template has been created earlier by a seller) added to information on making a bid after each purchase made within the offer.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1141?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier in which a logged-in user acted as the buyer.
     * @return Allegro_Web_Api_DoGetMessageToBuyerResponse Structure containing information on messages to the buyer.
     */
    public function getMessageToBuyer($sessionId, $itemId)
    {
        $parameters = new Allegro_Web_Api_DoGetMessageToBuyerRequest($sessionId, $itemId);
        return $this->doGetMessageToBuyer($parameters);
    }

    /**
     * This method allows for loading information on address data saved to user account. Use it mostly with doSendPostBuyForm.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1142?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetMyAddressesResponse Array of structures containing full address data of a logged-in user.
     */
    public function getMyAddresses($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetMyAddressesRequest($sessionId);
        return $this->doGetMyAddresses($parameters);
    }

    /**
     * This method provides all functions of "Bidding" tabs available in My Allegro. Additionally it allows for sorting and searching offers by name.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1262?lang=en
     *
     * @param string                            $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions A structure containing information about the method of sorting offers.
     * @param string                            $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                               $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max.: 100).
     * @param int                               $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                               $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyBidItemsResponse
     */
    public function getMyBidItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null, $searchValue = '',
                                  $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyBidItemsRequest($sessionId, $sortOptions, $searchValue, $categoryId,
            $itemIds, $limit, $offset);
        return $this->doGetMyBidItems($parameters);
    }

    /**
     * This method allows for retrieving the scheme used to calculate shipping costs set by the seller as a default one.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1324?lang=en
     *
     * @param string $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse Identifier of the shipping costs calculation scheme (1 – the most expensive shipment, 2 – the cheapest shipment, 3 – consignments will be sent separately; the shipping cost is the sum of costs of shipping each consignment)). A list of schemes used to calculate shipping costs can be retrieved using the doGetShipmentPriceTypes method. http:/allegro.pl/webapi/documentation.php/show/id,1323
     */
    public function getMyCurrentShipmentPriceType($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeRequest($sessionId);
        return $this->doGetMyCurrentShipmentPriceType($parameters);
    }

    /**
     * ﻿This method allows for loading private data (together with additional data of the Company account and extended data of accounts with the Pharmacy and Alcohol status) from an account of a logged user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1184?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function getMyData($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetMyDataRequest($sessionId);
        return $this->doGetMyData($parameters);
    }

    /**
     * This method provides all functions of the "Scheduled for listing" tab available in My Allegro. Additionally it allows for sorting and filtering offers.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1263?lang=en
     *
     * @param string                                    $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct         $sortOptions A structure containing information about the method of sorting offers.
     * @param Allegro_Web_Api_FutureFilterOptionsStruct $filterOptions A structure containing information about the method of filtering offers.
     * @param int                                       $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[]         $itemIds Array of offer identifiers (max.: 100).
     * @param int                                       $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                                       $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyFutureItemsResponse
     */
    public function getMyFutureItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                     Allegro_Web_Api_FutureFilterOptionsStruct $filterOptions = null,
                                     $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyFutureItemsRequest($sessionId, $sortOptions, $filterOptions,
            $categoryId, $itemIds, $limit, $offset);
        return $this->doGetMyFutureItems($parameters);
    }

    /**
     * This method allows for loading list of payments from buyers (made via PayU; completed) for transactions within offers of a logged user and made up to 90 days before.. A list of payments from the previous week (usually 25) is loaded by default (in case when the time range is not set), sorted in a descending order by their completion time. The list can be filtered by a user making the payment (buyerId), by an offer related to payments (itemId) and dates of payments. When the start date (transRecvDateFrom) is replaced by a particular value and 0 is passed as the end date (transRecvDateTo), a list of payments made between the provided date and 7 successive days will be returned. In reverse case (when 0 is passed as a start day and an end date has a particular value) a list of payments made between the end date and 7 preceding days will be returned. When providing particular values for both start and end date, a list of payments completed in that period will be returned. Different filters can be combined. In case of providing an incorrect user identifier an empty structure is returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1103?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $buyerId Identifier of a buyer whose payments are to be loaded..
     * @param int    $itemId Identifier of an offer related to the payment (also when an offer is a part of a combined payment).
     * @param int    $dateFrom Start date of time range (in the Unix time format) to load a list of payments.
     * @param int    $dateTo End date of time range (in the Unix time format) to load a list of payments.
     * @param int    $limit Size of data portion (range 1-25; default value: 25).
     * @param int    $offset Controlling (through the incrementation of provided value) the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsResponse Array of structures containing information on payments of users.
     */
    public function getMyIncomingPayments($sessionId, $buyerId = 0, $itemId = 0, $dateFrom = 0,
                                          $dateTo = 0, $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyIncomingPaymentsRequest($sessionId, $buyerId, $itemId,
            $dateFrom, $dateTo, $limit, $offset);
        return $this->doGetMyIncomingPayments($parameters);
    }

    /**
     * This method allows for loading a list of refunds (withdrawn payments made via PayU) for transactions concluded by buyers within offers of a logged-in user. The method returns data from recent 90 days. In case of providing an incorrect user’s identifier an empty structure is returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1185?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $buyerId Identifier of a buyer who made the refunded payment.
     * @param int    $itemId Identifier of an offer related to the refund.
     * @param int    $limit Size of data portion (min. 1, max. 25; passing 0 or a value higher than the maximum sets the size portion to default value: 25).
     * @param int    $offset Controlling (through the incrementation of passed value) the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse Array of structures containing information on refunds within offers of a logged-in user.
     */
    public function getMyIncomingPaymentsRefunds($sessionId, $buyerId = 0, $itemId = 0, $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsRequest($sessionId, $buyerId, $itemId, $limit, $offset);
        return $this->doGetMyIncomingPaymentsRefunds($parameters);
    }

    /**
     * This method provides all functions of "Not sold" tabs available in My Allegro. Additionally it allows for sorting and filtering offers and searching by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1264?lang=en
     *
     * @param string                                     $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct          $sortOptions A structure containing information about the method of sorting offers.
     * @param Allegro_Web_Api_NotSoldFilterOptionsStruct $filterOptions A structure containing information about the method of filtering offers.
     * @param string                                     $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                                        $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[]          $itemIds Array of offer identifiers (max.: 100).
     * @param int                                        $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100)
     * @param int                                        $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyNotSoldItemsResponse
     */
    public function getMyNotSoldItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                      Allegro_Web_Api_NotSoldFilterOptionsStruct $filterOptions = null,
                                      $searchValue = '', $categoryId = 0, $itemIds = array(),
                                      $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyNotSoldItemsRequest($sessionId, $sortOptions, $filterOptions,
            $searchValue, $categoryId, $itemIds, $limit, $offset);
        return $this->doGetMyNotSoldItems($parameters);
    }

    /**
     * This method provides all functions of "Not bought" tabs available in My Allegro. Additionally it allows for sorting and searching offers by name.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1265?lang=en
     *
     * @param string                            $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions A structure containing information about the method of sorting offers.
     * @param string                            $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                               $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max.: 100).
     * @param int                               $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100)
     * @param int                               $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyNotWonItemsResponse
     */
    public function getMyNotWonItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                     $searchValue = '', $categoryId = 0,
                                     $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyNotWonItemsRequest($sessionId, $sortOptions, $searchValue, $categoryId,
            $itemIds, $limit, $offset);
        return $this->doGetMyNotWonItems($parameters);
    }

    /**
     * This method allows for loading list of payments (made via PayU) for transactions concluded by a logged-in user and made up to 90 days before. A list of payments from the previous week (usually 25) is loaded by default (in case when the time range is not set), sorted in a descending order by their completion time. The list can be filtered by a user receiving the payment (sellerId), by an offer related to payments (itemId) and dates of payments. When the start date (paymentTimeFrom) is replaced by a particular value and 0 is passed as the end date (paymentTimeTo), a list of payments made between the provided date and 7 successive days will be returned. In reverse case (when 0 is passed as a start day and an end date has a particular value) a list of payments made between the end date and 7 preceding days will be returned. When providing particular values for both start and end date, a list of payments completed in that period will be returned. Different filters can be combined. In case of providing an incorrect user’s identifier an empty structure is returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1105?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $sellerId Seller's identifier for whom payments are to be loaded.
     * @param int    $itemId Identifier of an offer related to the payment (also when an offer is a part of a combined payment).
     * @param int    $dateFrom Start date of time range (in the Unix time format) to load a list of payments.
     * @param int    $dateTo End date of time range (in the Unix time format) to load a list of payments.
     * @param int    $limit Size of data portion (min. 1, max. 24; by entering 0 or a value outside the range sets the size portion to default value: 25).
     * @param int    $offset Controlling  (through the incrementation of provided value)  the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetMyPaymentsResponse Array of structures containing information on payments of a logged user.
     */
    public function getMyPayments($sessionId, $sellerId = 0, $itemId = 0, $dateFrom = 0,
                                  $dateTo = 0, $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyPaymentsRequest($sessionId, $sellerId, $itemId, $dateFrom,
            $dateTo, $limit, $offset);
        return $this->doGetMyPayments($parameters);
    }

    /**
     * This method allows for loading set of data on PayU settings taken from the account of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1143?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetMyPaymentsInfoResponse Structure with PayU settings of a logged user.
     */
    public function getMyPaymentsInfo($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetMyPaymentsInfoRequest($sessionId);
        return $this->doGetMyPaymentsInfo($parameters);
    }

    /**
     * This method allows for loading a list of refunds (withdrawal of payments made via PayU) related to transactions concluded by a logged-in user. The method returns data from recent 90 days. In case of providing an incorrect user identifier an empty structure is returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1135?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $sellerId Identifier of a seller who has received the refunded later payment.
     * @param int    $itemId Identifier of an offer related to the refund.
     * @param int    $limit Size of data portion (min. 1, max. 25; passing 0 or a value higher than the maximum sets the size portion to default value: 25).
     * @param int    $offset Controlling (through the incrementation of passed value) the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetMyPaymentsRefundsResponse Array of structures containing information on refunds of a logged-in user.
     */
    public function getMyPaymentsRefunds($sessionId, $sellerId = 0, $itemId = 0, $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyPaymentsRefundsRequest($sessionId, $sellerId, $itemId, $limit, $offset);
        return $this->doGetMyPaymentsRefunds($parameters);
    }

    /**
     * This method allows for loading a list of withdrawals (consisting of payments made by buyers via PayU) for transactions made within offers of a logged user. A list of withdrawals (about 50) from the previous week (in case when the time range is not set) is loaded by default, sorted in a descending order by their completion time. That list can be filtered by the time range of withdrawals. When the start date (transCreateDateFrom) is replaced by a particular value and 0 is passed as the end date (transCreateDateTo), a list of withdrawals made between the provided date and 7 successive days will be returned. In reverse case (when 0 is passed as a start day and an end date has a particular value) a list of withdrawals made between the end date and 7 preceding days will be returned. When providing particular values for both start and end date, a list of withdrawals completed in that period will be returned (the set period cannot exceed 30 days).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1106?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $dateFrom Start date of time range (in the Unix time format) to load a list of withdrawals.
     * @param int    $dateTo End date of time range (in the Unix time format) to load a list of withdrawals.
     * @param int    $limit Size of data portion (min. 1, max. 49; by entering 0 or a value outside the range sets the size portion to default value: 50).
     * @param int    $offset Controlling (through the incrementation of provided value) the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetMyPayoutsResponse Array of structures containing information on withdrawals of a logged user.
     */
    public function getMyPayouts($sessionId, $dateFrom = 0, $dateTo = 0, $limit = 50, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyPayoutsRequest($sessionId, $dateFrom, $dateTo, $limit, $offset);
        return $this->doGetMyPayouts($parameters);
    }

    /**
     * This method provides all functions of “Selling" tabs available in My Allegro. Additionally it allows for sorting and filtering offers and searching by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1266?lang=en
     *
     * @param string                                  $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct       $sortOptions A structure containing information about the method of sorting offers.
     * @param Allegro_Web_Api_SellFilterOptionsStruct $filterOptions A structure containing information about the method of filtering offers.
     * @param string                                  $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                                     $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[]       $itemIds Array of offer identifiers (max.: 100).
     * @param int                                     $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                                     $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMySellItemsResponse
     */
    public function getMySellItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                   Allegro_Web_Api_SellFilterOptionsStruct $filterOptions = null, $searchValue = '',
                                   $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMySellItemsRequest($sessionId, $sortOptions, $filterOptions,
            $searchValue, $categoryId, $itemIds, $limit, $offset);
        return $this->doGetMySellItems($parameters);
    }

    /**
     * This method allows for loading detailed information on sale evaluation of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1131?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function getMySellRating($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetMySellRatingRequest($sessionId);
        return $this->doGetMySellRating($parameters);
    }

    /**
     * This method provides all functions of "Sold" tabs available in My Allegro. Additionally it allows for sorting and filtering offers and searching by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1267?lang=en
     *
     * @param string                                  $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct       $sortOptions A structure containing information about the method of sorting offers.
     * @param Allegro_Web_Api_SoldFilterOptionsStruct $filterOptions A structure containing information about the method of filtering offers.
     * @param string                                  $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                                     $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[]       $itemIds Array of offer identifiers (max.: 100).
     * @param int                                     $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                                     $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMySoldItemsResponse
     */
    public function getMySoldItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                   Allegro_Web_Api_SoldFilterOptionsStruct $filterOptions = null, $searchValue = '',
                                   $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMySoldItemsRequest($sessionId, $sortOptions, $filterOptions,
            $searchValue, $categoryId, $itemIds, $limit, $offset);
        return $this->doGetMySoldItems($parameters);
    }

    /**
     * This method provides all functions of "Watched: Ongoing" tabs available in My Allegro. Additionally it allows for sorting and searching offers by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1269?lang=en
     *
     * @param string                            $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions A structure containing information about the method of sorting offers.
     * @param string                            $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                               $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max.: 100).
     * @param int                               $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                               $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyWatchItemsResponse
     */
    public function getMyWatchItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null, $searchValue = '',
                                    $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyWatchItemsRequest($sessionId, $sortOptions, $searchValue, $categoryId,
            $itemIds, $limit, $offset);
        return $this->doGetMyWatchItems($parameters);
    }

    /**
     * This method provides all functions of “Watched: Ended" tabs available in My Allegro. Additionally it allows for sorting and searching offers by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1268?lang=en
     *
     * @param string                            $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions A structure containing information about the method of sorting offers.
     * @param string                            $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                               $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max.: 100).
     * @param int                               $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                               $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyWatchedItemsResponse
     */
    public function getMyWatchedItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null,
                                      $searchValue = '', $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyWatchedItemsRequest($sessionId, $sortOptions, $searchValue,
            $categoryId, $itemIds, $limit, $offset);
        return $this->doGetMyWatchedItems($parameters);
    }

    /**
     * This method provides all functions of "Bought" tabs available in My Allegro. Additionally it allows for sorting and searching offers by name.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1270?lang=en
     *
     * @param string                            $sessionId A user’s session identifier received using the method doLogin(Enc).
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions A structure containing information about the method of sorting offers.
     * @param string                            $searchValue A phrase searched in offers (relates to searching by the offer title). It allows for searching using characters such as *, -, () and “".
     * @param int                               $categoryId A parameter which allows for indicating a category of displayed offers.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max.: 100).
     * @param int                               $limit A parameter which allows for indicating the number of displayed offers (min.: 1, max.: 1,000, default value: 100).
     * @param int                               $offset A parameter which allows for indicating data portions to be displayed (default value: 0).
     * @return Allegro_Web_Api_DoGetMyWonItemsResponse
     */
    public function getMyWonItems($sessionId, Allegro_Web_Api_SortOptionsStruct $sortOptions = null, $searchValue = '',
                                  $categoryId = 0, $itemIds = array(), $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetMyWonItemsRequest($sessionId, $sortOptions, $searchValue, $categoryId,
            $itemIds, $limit, $offset);
        return $this->doGetMyWonItems($parameters);
    }

    /**
     * This method allows for loading information on fees related to use of an appropriate for the given country platform.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1107?lang=en
     *
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @return Allegro_Web_Api_DoGetPaymentDataResponse Array of structures containing information on particular fees.
     */
    public function getPaymentData($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetPaymentDataRequest($countryId, $webapiKey);
        return $this->doGetPaymentData($parameters);
    }

    /**
     * This method allows for loading all available (for a logged-in user) payment methods. Use it mostly with doSendPostBuyForm.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1144?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds An array of offer identifiers for which a list of payment methods is to be returned (minimum: 1, maximum: 25).
     * @return Allegro_Web_Api_DoGetPaymentMethodsResponse Array of structures containing information on available payment methods.
     */
    public function getPaymentMethods($sessionId, $itemIds = array())
    {
        $parameters = new Allegro_Web_Api_DoGetPaymentMethodsRequest($sessionId, $itemIds);
        return $this->doGetPaymentMethods($parameters);
    }

    /**
     *﻿This method allows for loading full contact data of trading partners from the given offer. It returns various data - depends on whether a logged user acts as a seller (userData, userSentToData) or a buyer (userData, userBankAccounts, companySecondAddress) in an offer. In case of providing an incorrect offer identifier an empty structure is returned. The method does not return data for offers moved to the archive.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1108?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemsArray Array of offer identifiers (max. 25).
     * @return Allegro_Web_Api_DoGetPostBuyDataResponse Array of structures containing information on offers and trading partners data.
     */
    public function getPostBuyData($sessionId, $itemsArray)
    {
        $parameters = new Allegro_Web_Api_DoGetPostBuyDataRequest($sessionId, $itemsArray);
        return $this->doGetPostBuyData($parameters);
    }

    /**
     * This method allows buyers to load all data from filled-out after-sale forms and related additional payment forms. It also returns detailed payment data (made through PayU) related to the indicated transactions, cart transactions (also for many sellers), information on a selected pick-up point and identification data on shipment containing products from particular transactions. If incorrect transaction identifiers or the ones which cannot be accessed by a logged-in user are provided in the input array, they are ignored when presenting output data (data are returned only for transaction identifiers considered correct and relating to the user being a session owner). Additionally - calling this method for a transaction where a logged user has acted as a seller will result in returning an empty structure. The doGetPostBuyFormsDataForSellers method should be used for such purpose.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1148?lang=en
     *
     * @param string                            $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $transactionsIdsArray Array of transaction and related additional payment identifiers (max. 25). Information on relation between an offer identifier and a transaction identifier can be obtained by the doGetTransactionsIDs method.
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse
     */
    public function getPostBuyFormsDataForBuyers($sessionId, array $transactionsIdsArray)
    {
        $parameters = new Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersRequest($sessionId, $transactionsIdsArray);
        return $this->doGetPostBuyFormsDataForBuyers($parameters);
    }

    /**
     * This method allows sellers to load data from after-sale and related additional payment forms filled out by buyers. It also returns detailed payment data (made through PayU) related to the indicated transactions, information on a selected pick-up point and identification data on shipment containing products from particular transactions. If incorrect transaction identifiers or the ones which cannot be accessed by a logged-in user are provided in the input array, they are ignored when presenting output data (data are returned only for transaction identifiers considered correct and relating to the user being a session owner). Additionally - calling this method for a transaction in which a logged-in user has acted as a buyer will result in returning an empty structure. The doGetPostBuyFormsDataForBuyers method should be used for such purpose.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1128?lang=en
     *
     * @param string                            $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $transactionsIdsArray Array of transaction and related additional payment identifiers (max. 25). Information on relation between an offer identifier and a transaction identifier can be obtained by the doGetTransactionsIDs method.
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse
     */
    public function getPostBuyFormsDataForSellers($sessionId, $transactionsIdsArray)
    {
        $parameters = new Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest($sessionId, $transactionsIdsArray);
        return $this->doGetPostBuyFormsDataForSellers($parameters);
    }

    /**
     * This method return IDs of the after-sale forms (including surcharges) related to a user who is the session owner. You can filter the data numerous ways (e.g. by IDs of offersusers/payment options, strings in titles, payment status or time of creating the form). The logic of the method is based on a system of filters returned contextually that allows for controlling the range of returned details. You can find a tutorial describing dynamic filters at: http://allegro.pl/webapi/tutorials/tutorial/id,321. This method returns the last month’s data sorted in descending order by the date of filling out the form.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1383?lang=en
     *
     * @param string                                   $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions Criteria of filtering the results (a list of available in that certain context filters is returned as the output of the method within the  filtersList structure).
     * @param int                                      $limit Size of data portion (min. 1, max. 1,000). Default value: 100.
     * @param int                                      $offset Controlling the process of getting another portion of data. Default value: 0.
     * @return Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
     */
    public function getPostBuyFormsIds($sessionId, Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions = null,
                                       $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetPostBuyFormsIdsRequest($sessionId, $filterOptions, $limit, $offset);
        return $this->doGetPostBuyFormsIds($parameters);
    }

    /**
     * This method allows for verifying whether it is possible to fill out the after-sale form for indicated offers (while calling the method).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1303?lang=en
     *
     * @param string                            $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (min. 1, max. 200).
     * @return Allegro_Web_Api_DoGetPostBuyItemInfoResponse
     */
    public function getPostBuyItemInfo($sessionId, $itemIds)
    {
        $parameters = new Allegro_Web_Api_DoGetPostBuyItemInfoRequest($sessionId, $itemIds);
        return $this->doGetPostBuyItemInfo($parameters);
    }

    /**
     * This method is for getting purchase transactions you can request the commission refund form.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1485?lang=en
     *
     * @param string                                   $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions Criteria of filtering the results (a list of available in that certain context filters is returned as the output of the method within the  filtersList structure).
     * @param string                                   $sortOrder Sorting order: asc - ascending (default value for most of the listings), desc - descending.
     * @param int                                      $limit Size of data portion (min. 1, max. 1,000). Default value: 100.
     * @param int                                      $offset Controlling the process of getting another portion of data. Default value: 0.
     * @return Allegro_Web_Api_DoGetRefundsDealsResponse
     */
    public function getRefundsDeals($sessionId, Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions = null,
                                    $sortOrder = Allegro_Web_Api_DoGetRefundsDealsRequest::SORT_ORDER_ASC,
                                    $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetRefundsDealsRequest($sessionId, $filterOptions, $sortOrder, $limit, $offset);
        return $this->doGetRefundsDeals($parameters);
    }

    /**
     * This method is for getting a list of submitted commission refund forms.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1484?lang=en
     *
     * @param string                                   $sessionId User’s session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions Criteria of filtering the results (a list of available in that certain context filters is returned as the output of the method within the  filtersList structure).
     * @param int                                      $limit Size of data portion (min. 1, max. 1,000). Default value: 100.
     * @param int                                      $offset Controlling the process of getting another portion of data. Default value: 0.
     * @return Allegro_Web_Api_DoGetRefundsListResponse
     */
    public function getRefundsList($sessionId, Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions = null,
                                   $limit = 100, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetRefundsListRequest($sessionId, $filterOptions, $limit, $offset);
        return $this->doGetRefundsList($parameters);
    }

    /**
     * This method is for getting reasons for commission refund available for a particular purchase transaction.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1483?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $dealId Identifier of a purchase transaction (received using doGetRefundsDeals).
     * @return Allegro_Web_Api_DoGetRefundsReasonsResponse
     */
    public function getRefundsReasons($sessionId, $dealId)
    {
        $parameters = new Allegro_Web_Api_DoGetRefundsReasonsRequest($sessionId, $dealId);
        return $this->doGetRefundsReasons($parameters);
    }

    /**
     * This method allows for loading offer identifiers related to those provided on input for which a common after-sale form is to be filled-out (realization of a first step of an after-sale process). Only offers for which the payment process has not started are returned from the list of related ones with an access to PayU. Use it mostly with doSendPostBuyForm.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1145?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers where items were bought by a logged-in user (max. 25).
     * @return Allegro_Web_Api_DoGetRelatedItemsResponse
     */
    public function getRelatedItems($sessionId, $itemIds)
    {
        $parameters = new Allegro_Web_Api_DoGetRelatedItemsRequest($sessionId, $itemIds);
        return $this->doGetRelatedItems($parameters);
    }

    /**
     * This method allows for loading a list of parameters available for the selected category in the indicated country. Chosen parameters can be used to build a filter used when listing the category content with the doShowCat method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1109?lang=en
     *
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @param int    $categoryId Category identifier.
     * @return Allegro_Web_Api_DoGetSellFormAttribsResponse
     */
    public function getSellFormAttribs($webapiKey, $countryId, $categoryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormAttribsRequest($countryId, $webapiKey, 0, $categoryId);
        return $this->doGetSellFormAttribs($parameters);
    }

    /**
     * @warning this method doesn't exist in documentation
     * @todo test
     *
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @return Allegro_Web_Api_DoGetSellFormFieldsResponse
     */
    public function getSellFormFields($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormFieldsRequest($countryId, 0, $webapiKey);
        return $this->doGetSellFormFields($parameters);
    }

    /**
     * This method allows for loading a list of sale form fields that are available in a given country. Selected fields can be used to e.g. build and fill out the form of listing a new offer using the doNewAuctionExt method.
     * @finish
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1110?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtResponse
     */
    public function getSellFormFieldsExt($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormFieldsExtRequest($countryId, 0, $webapiKey);
        return $this->doGetSellFormFieldsExt($parameters);
    }

    /**
     * This method allows for loading (in portions) a list of sale form fields available in the indicated country. Selected fields can be used to e.g. build and fill out the form of listing a new offer using the doNewAuctionExt method. 50 elements are returned by default. The size of portion can be regulated by the packageElement parameter and the offset parameter allows to control the process of loading next portions of data.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1111?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $limit Parameter which allows for defining a size of data bits (min. 1, default: 50).
     * @param int    $offset Parameter which allows for controlling loading of new data bits (bid numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitResponse
     */
    public function getSellFormFieldsExtLimit($webapiKey, $countryId, $limit = 50, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest($countryId, 0, $webapiKey, $offset, $limit);
        return $this->doGetSellFormFieldsExtLimit($parameters);
    }

    /**
     * This method allows to load a list of sale form's fields available in a selected country in a selected category. Each time constant fields for all categories are returned with a list of parameters available to be set in the category selected on input (on condition that the given category is the leaf). Selected fields can be used to e.g. build and fill out the form of listing a new offer using the doNewAuctionExt method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1147?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $categoryId Category identifier (a list of category identifiers can be loaded using the doGetCatsData(Limit) method).
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse
     */
    public function getSellFormFieldsForCategory($webapiKey, $countryId, $categoryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest($webapiKey, $countryId, $categoryId);
        return $this->doGetSellFormFieldsForCategory($parameters);
    }

    /**
     * doesn't exist in documentation
     * @todo test
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $limit Parameter which allows for defining a size of data bits (min. 1, default: 50).
     * @param int    $offset Parameter which allows for controlling loading of new data bits (bid numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function getSellFormFieldsLimit($webapiKey, $countryId, $limit = 50, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetSellFormFieldsLimitRequest($countryId, 0, $webapiKey, $offset, $limit);
        return $this->doGetSellFormFieldsLimit($parameters);
    }

    /**
     * This method allows for loading a list of transaction dissatisfaction reasons as well as a list of sale areas undergoing evaluation.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1132?lang=en
     *
     * @param string $webapiKey
     * @param int    $countryId
     * @return Allegro_Web_Api_DoGetSellRatingReasonsResponse
     */
    public function getSellRatingReasons($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSellRatingReasonsRequest($webapiKey, $countryId);
        return $this->doGetSellRatingReasons($parameters);
    }

    /**
     *﻿This method allows for loading a list of platform's messages taken from the 'News' page as well as messages for the indicated country. Up to 50 messages can be returned for a given category - their list is sorted in descending order by the time of adding them. In case of not providing date (anItDate) or message identifier (ani-it-id) only the newest message from the given category will be returned.
     * @test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1112?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $anCatId Identifier of message category (their list can be obtained by using the doGetServiceInfoCategories method).
     * @param int    $anItDate Date (in the Unix time format) by which a list of messages is to be returned.
     * @param int    $anItId Message identifier by which a list of messages is to be returned.
     * @return Allegro_Web_Api_DoGetServiceInfoResponse
     */
    public function getServiceInfo($webapiKey, $countryId, $anCatId, $anItDate = 0, $anItId = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetServiceInfoRequest($countryId, $anCatId, $anItDate, $anItId, $webapiKey);
        return $this->doGetServiceInfo($parameters);
    }

    /**
     * This method allows for loading a list of platform's message categories taken from the 'News' page as well as messages for the indicated country.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1113?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetServiceInfoCategoriesResponse Array of structures containing information on category of messages.
     */
    public function getServiceInfoCategories($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetServiceInfoCategoriesRequest($countryId, $webapiKey);
        return $this->doGetServiceInfoCategories($parameters);
    }

    /**
     * This method allows for loading graphical system offer templates available for a particular country.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1114?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetServiceTemplatesResponse Array of structures containing information on offer templates.
     */
    public function getServiceTemplates($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetServiceTemplatesRequest($countryId, $webapiKey);
        return $this->doGetServiceTemplates($parameters);
    }

    /**
     * doesn't exist in documentation
     * @todo test
     *
     * @param string $webapiKey
     * @param int    $countryId
     * @return Allegro_Web_Api_DoGetSessionHandleForWidgetResponse
     */
    public function getSessionHandleForWidget($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSessionHandleForWidgetRequest($webapiKey, $countryId);
        return $this->doGetSessionHandleForWidget($parameters);
    }

    /**
     * This method allows to load a full list of delivery methods available in the selected country.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1070?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetShipmentDataResponse
     */
    public function getShipmentData($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetShipmentDataRequest($countryId, $webapiKey);
        return $this->doGetShipmentData($parameters);
    }

    /**
     * This method allows for loading common delivery methods for offers provided on input. Use it mostly with doSendPostBuyForm. Note: at this stage this method does not process the general delivery.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1146?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers where items were bought by a logged-in user (max. 25).
     * @return Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse
     */
    public function getShipmentDataForRelatedItems($sessionId, $itemIds)
    {
        $parameters = new Allegro_Web_Api_DoGetShipmentDataForRelatedItemsRequest($sessionId, $itemIds);
        return $this->doGetShipmentDataForRelatedItems($parameters);
    }

    /**
     * This method allows for retrieving all schemes used to calculate shipping costs available in the given country.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1323?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetShipmentPriceTypesResponse Array of structures containing information on available schemes used to calculate shipping costs.
     */
    public function getShipmentPriceTypes($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetShipmentPriceTypesRequest($countryId, $webapiKey);
        return $this->doGetShipmentPriceTypes($parameters);
    }

    /**
     * This method allows for loading full category tree created by a logged-in user in his/her Allegro Shop.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1116?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetShopCatsDataResponse Array of structures containing information on each category.
     */
    public function getShopCatsData($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetShopCatsDataRequest($sessionId);
        return $this->doGetShopCatsData($parameters);
    }

    /**
     * This method allows for loading information from the event log on events (start, end, making bid, purchase via Buy it Now!, change in an offer, cancelling bid) related to offers of a logged user (only data of offers created by a user in a country to which he/she is logged while calling the method are returned) or to all offers available on the platform. 100 of most recent events are returned (starting from the point set in the startingPoint parameter) sorted in ascending order by the time of their appearance. If the startingPoint parameter is 0 then 100 chronologically earliest events will be returned, which also the event log has an access to (usually these are data from recent 8-9 days). In order to control the process of loading next data portions (to get to the most recent data) the startingPoint parameter has to pass the rowId value of the last (hundredth) element returned when calling the method and you need to repeat the process until you receive a data portion containing less than 100 elements (that means the received data are up-to-date).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1091?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $startingPoint Staring point which allows to control loading next data portions of information on the number of offer-related events (its value is provided in the rowId field of the siteJournalArray structure).
     * @param int    $infoType Scope of information returned (0 - only data on events in offers of a logged-in user, 1 - data on events in all offers on the site; 0 is set by default).
     * @return Allegro_Web_Api_DoGetSiteJournalResponse
     */
    public function getSiteJournal($sessionId, $startingPoint = 0,
                                   $infoType = Allegro_Web_Api_DoGetSiteJournalRequest::INFO_TYPE_ALL_OFFERS)
    {
        $parameters = new Allegro_Web_Api_DoGetSiteJournalRequest($sessionId, $startingPoint, $infoType);
        return $this->doGetSiteJournal($parameters);
    }

    /**
     * This method allows for loading information from the event log on events (creating purchase event, creating transaction, cancelling transaction, completing transaction) related to after-sale forms in a context of a logged-in user being the transaction's party (data are returned only for offers created by the user in a country to which he/she is logged-in to while calling the method). 100 of most recent events are returned (starting from the point set in the journalStart parameter) sorted in ascending order by the time of their appearance. In order to control the process of loading next data portions (to get to the most recent data) the journalStart parameter has to pass the dealEventId value of the last (hundredth) element returned when calling the method and you need to repeat the process until you receive a data portion containing less than 100 elements (that means the received data are up-to-date).
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1189?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $journalStart Staring point which allows to control loading next data portions of information on events related to after-sale forms (its value is returned in the dealEventId field of the siteJournalDeals structure).
     * @return Allegro_Web_Api_DoGetSiteJournalDealsResponse Array of structures containing information on events related to sale forms.
     */
    public function getSiteJournalDeals($sessionId, $journalStart = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetSiteJournalDealsRequest($sessionId, $journalStart);
        return $this->doGetSiteJournalDeals($parameters);
    }

    /**
     * This method allows for loading information from the event log on a number of events related to after-sale forms starting from the set (in the journalStart parameter) initial point (it takes into consideration oldest 10,000 events - starting from the provided initial point) in a context of a logged-in user. To set the initial point for the process of loading information on number of events (in order to get to the most recent) the journalStart parameter has to pass the appropriate dealEventId value returned while calling the doGetSiteJournalDeals method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1191?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $journalStart Staring point which allows to control loading next data portions of information on events related to after-sale forms (its value is returned in the dealEventId field of the siteJournalDeals structure).
     * @return Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse
     */
    public function getSiteJournalDealsInfo($sessionId, $journalStart = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetSiteJournalDealsInfoRequest($sessionId, $journalStart);
        return $this->doGetSiteJournalDealsInfo($parameters);
    }

    /**
     * This method allows for loading information from the event log on the number of events in offers of a logged user or in all offers available on the platform counting from the set (in the startingPoint parameter) moment (the mechanism takes into consideration 10,000 offers put in chronological order – starting from the provided starting point). To set the initial point for the process of loading information on number of events (in order to get to the most recent) the startingPoint parameter has to pass the appropriate rowId value returned while calling the doGetSiteJournal method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1094?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $startingPoint Staring point which allows to control loading next data portions of information on the number of offer-related events (its value is provided in the rowId field of the siteJournalArray structure).
     * @param int    $infoType Scope of information returned (0 - only data on events in offers of a logged-in user, 1 - data on events in all offers on the site; 0 is set by default).
     * @return Allegro_Web_Api_DoGetSiteJournalInfoResponse
     */
    public function getSiteJournalInfo($sessionId, $startingPoint = 0,
                                       $infoType = Allegro_Web_Api_DoGetSiteJournalInfoRequest::INFO_TYPE_ALL_OFFERS)
    {
        $parameters = new Allegro_Web_Api_DoGetSiteJournalInfoRequest($sessionId, $startingPoint, $infoType);
        return $this->doGetSiteJournalInfo($parameters);
    }

    /**
     * This method allows for loading detailed information (name, URL, country code, used code page, logo, country's flag) on available services on Allegro platform.
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1165?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetSitesFlagInfoResponse
     */
    public function getSitesFlagInfo($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSitesFlagInfoRequest($countryId, $webapiKey);
        return $this->doGetSitesFlagInfo($parameters);
    }

    /**
     * This method allows for loading detailed information (name, URL, country code, used code page, logo) on services available on Allegro platform.
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1166?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetSitesInfoResponse
     */
    public function getSitesInfo($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSitesInfoRequest($countryId, $webapiKey);
        return $this->doGetSitesInfo($parameters);
    }

    /**
     * This method allows for loading listing of all offers featured currently in special categories (newest 1,000, coming to end, featured on a main page, featured on pages of particular categories). 50 offers are always returned sorted in an ascending order by the end date. The offset parameter allows to control the process of loading next portions of data.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1167?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $specialType Type of special category (0 - newest 1000, 1 - coming to end, 2 - featured on a main page, 3 - featured on sites of particular categories).
     * @param int    $specialGroup Category identifier (for specialType = 3).
     * @param int    $offset Parameter which allows for controlling loading of new data portions (portion numbers are indexed from 0; 19 is the max. value data are returned for).
     * @param int    $orderFulfillmentTime Time of realization (in hours: 24/48/72/96/120/168/240/336/504/999; 999 = 'more'). In UA/KZ it works as 'Sent within' with an additional value 1 ('immediately').
     * @return Allegro_Web_Api_DoGetSpecialItemsResponse
     */
    public function getSpecialItems($sessionId, $specialType = Allegro_Web_Api_DoGetSpecialItemsRequest::SPECIAL_TYPE_NEWEST_1000,
                                    $specialGroup = 0, $offset = 0,
                                    $orderFulfillmentTime = Allegro_Web_Api_DoGetSpecialItemsRequest::FULFILLMENT_TIME_NOW)
    {
        $parameters = new Allegro_Web_Api_DoGetSpecialItemsRequest($sessionId, $specialType, $specialGroup, $offset, $orderFulfillmentTime);
        return $this->doGetSpecialItems($parameters);
    }


    /**
     * This method allows for loading list of regions (for Poland - provinces) of the selected country.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1168?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetStatesInfoResponse Array of structures containing information on regions.
     */
    public function getStatesInfo($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetStatesInfoRequest($countryId, $webapiKey);
        return $this->doGetStatesInfo($parameters);
    }

    /**
     * This method allows for loading current (for the given country) time from the Allegro server.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1088?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @return Allegro_Web_Api_DoGetSystemTimeResponse Current server time (in the Unix time format).
     */
    public function getSystemTime($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoGetSystemTimeRequest($countryId, $webapiKey);
        return $this->doGetSystemTime($parameters);
    }

    /**
     * This method allows for loading values of transaction identifiers (purchases completed by filling out an after-sale form by a buyer) and related additional payments based on passed offer identifiers. Results can be filtered by delivery methods by providing their identifiers while calling. Results are sorted in the same order in which forms related to the given offer have been filled out (since the most recent to the oldest one). Received transaction identifiers can be used e.g. to load filled out after-sale forms using the doGetPostBuyFormsDataForSellers/ForBuyers method. This method returns only transaction identifiers with filled out by a buyer after-sale forms (within the given offer).
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1120?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max. 25).
     * @param string                            $userRole Role of a user in a transaction (appropriate for provided offer identifiers). Parameter can have one of two values ('seller' or 'buyer').
     * @param Allegro_Web_Api_ArrayOfLong|int[] $shipmentIdArray Array of shipping method identifiers (it can be loaded by using the doGetShipmentData). If no transaction are found for the given identifier, an empty structure is returned.
     * @return Allegro_Web_Api_DoGetTransactionsIDsResponse Array of transaction IDs and related additional payments.
     */
    public function getTransactionsIDs($sessionId, $itemIds,
                                       $userRole = Allegro_Web_Api_DoGetTransactionsIDsRequest::USER_ROLE_SELLER,
                                       $shipmentIdArray = array())
    {
        $parameters = new Allegro_Web_Api_DoGetTransactionsIDsRequest($sessionId, $itemIds, $userRole, $shipmentIdArray);
        return $this->doGetTransactionsIDs($parameters);
    }

    /**
     * This method allows for verifying user ID by using his/her username.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1169?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $userLogin Username.
     * @return Allegro_Web_Api_DoGetUserIDResponse User identifier.
     */
    public function getUserID($webapiKey, $countryId, $userLogin)
    {
        $parameters = new Allegro_Web_Api_DoGetUserIDRequest($countryId, $userLogin, '', $webapiKey); // middle parameter is depreciated
        return $this->doGetUserID($parameters);
    }

    /**
     * This method allows for loading listing of all offers being currently listed by a given user. 25 offers are returned by default sorted in an ascending order by the offer's end date. The size of a data portion can be regulated by the limit parameter and the offset parameter allows to control the process of loading next portions of data.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1170?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $userId User identifier.
     * @param int    $limit Parameter which allows for defining a size of data portion (scope: 1-100; 25 by default).
     * @param int    $offset Parameter that allows for controlling (through the incrementation of passed value) the process of loading new data portions. Portion numbers are indexed from 0.
     * @return Allegro_Web_Api_DoGetUserItemsResponse
     */
    public function getUserItems($webapiKey, $countryId, $userId, $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetUserItemsRequest($userId, $webapiKey, $countryId, $offset, $limit);
        return $this->doGetUserItems($parameters);
    }

    /**
     * This method allows the logged-in user to load the expiry date of a license for using the key provided while logging in.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1123?lang=en
     *
     * @param string $sessionId $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoGetUserLicenceDateResponse User's license expiration date (in the Unix time format).
     */
    public function getUserLicenceDate($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetUserLicenceDateRequest($sessionId);
        return $this->doGetUserLicenceDate($parameters);
    }

    /**
     * This method allows for verifying a username by using the identifier.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1171?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $userId User identifier.
     * @return Allegro_Web_Api_DoGetUserLoginResponse Username (for not registered users: Unregistered).
     */
    public function getUserLogin($webapiKey, $countryId, $userId)
    {
        $parameters = new Allegro_Web_Api_DoGetUserLoginRequest($countryId, $userId, $webapiKey);
        return $this->doGetUserLogin($parameters);
    }

    /**
     * This method allows for loading information on comments waiting to be posted by a logged user. 25 elements are returned by default. The size of a data portion can be regulated by the packageSize parameter and the offset parameter allows to control process of loading next portions of data.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1172?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $limit Parameter which allows for defining a size of data portion (min. 1, max. 200; 0 is set by default).
     * @param int    $offset Parameter which allows for controlling loading of new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksResponse Array of structures containing information on feedback to be left.
     */
    public function getWaitingFeedbacks($sessionId, $limit = 0, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoGetWaitingFeedbacksRequest($sessionId, $offset, $limit);
        return $this->doGetWaitingFeedbacks($parameters);
    }

    /**
     * This method allows for loading information on feedback waiting to be left by a logged-in user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1173?lang=en
     *
     * @param string $sessionId
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse
     */
    public function getWaitingFeedbacksCount($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoGetWaitingFeedbacksCountRequest($sessionId);
        return $this->doGetWaitingFeedbacksCount($parameters);
    }

    /**
     * doesn't exist in documentation
     * @todo test
     *
     * @param $webapiKey
     * @param $userId
     * @param $istoreId
     * @param $actionType
     * @param $actionDate
     * @param $validDate
     * @return Allegro_Web_Api_DoInternalIStoreChangeResponse
     */
    public function internalIStoreChange($webapiKey, $userId, $istoreId, $actionType, $actionDate, $validDate)
    {
        $parameters = new Allegro_Web_Api_DoInternalIStoreChangeRequest($webapiKey, $userId, $istoreId, $actionType,
            $actionDate, $validDate);
        return $this->doInternalIStoreChange($parameters);
    }

    /**
     * ﻿This method allows for authentication and authorisation of a user using account access data (login or e-mail address and password). After successful authentication, the user receives a session identifier which can then be used when calling methods requiring authorisation. The session identifier is valid for one hour from its creation.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1096?lang=en
     *
     * @param string $userLogin Username (1-16 characters) or e-mail address.
     * @param string $userPassword User's password (6-16 characters).
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @param int    $localVersion Version key relevant for a selected country and WebAPI key provided.
     * @return Allegro_Web_Api_DoLoginResponse
     */
    public function login($userLogin, $userPassword, $countryId, $webapiKey, $localVersion)
    {
        $parameters = new Allegro_Web_Api_DoLoginRequest($userLogin, $userPassword, $countryId, $webapiKey, $localVersion);
        return $this->doLogin($parameters);
    }

    /**
     * This method allows for authentication and authorisation of a user using account access data (login or e-mail address and password in the encrypted form). After successful authentication, the user receives a session identifier which can then be used when calling methods requiring authorisation. The session identifier is valid for one hour from its creation.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1099?lang=en
     *
     * @param string $userLogin Username (1-16 characters) or e-mail address.
     * @param string $userHashPassword Encrypted user's password (first encrypted with sha-256, then with base64).
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @param int    $localVersion Version key relevant for a selected country and WebAPI key provided.
     * @return Allegro_Web_Api_DoLoginEncResponse
     */
    public function loginEnc($userLogin, $userHashPassword, $countryId, $webapiKey, $localVersion)
    {
        $parameters = new Allegro_Web_Api_DoLoginEncRequest($userLogin, $userHashPassword, $countryId, $webapiKey, $localVersion);
        return $this->doLoginEnc($parameters);
    }

    /**
     * doesn't exist in documentation
     * @todo test
     *
     * @param string $webapiKey
     * @param int    $countryId
     * @param mixed  $accessToken
     * @return Allegro_Web_Api_DoLoginWithAccessTokenResponse
     */
    public function loginWithAccessToken($webapiKey, $countryId, $accessToken)
    {
        $parameters = new Allegro_Web_Api_DoLoginWithAccessTokenRequest($accessToken, $countryId, $webapiKey);
        return $this->doLoginWithAccessToken($parameters);
    }

    /**
     * This method allows for loading list of offers from particular tabs of My Allegro (bid, bought, not bought, watched: ongoing, watched: ended, on sale, sold, not sold, to be listed) of a logged-in user. By default, the list of 25 offers from the given tab is returned (those which have been left or received), sorted descending by their time of ending. It is also possible to load information on indicated offers from the given tab (itemsArray). Lists of username and buyer identifiers are available for tabs of ‘sell’ and ‘sold’ type - for others the mentioned data will be returned in an anonymous form. Important! The method will not return information on offers manually removed from My Allegro tabs on the website.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1174?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string                            $accountType Selected type of My Allegro tab (bid - offers from the Bidding tab, won - offers from the Bought tab, not_won - offers from the Not bought tab, watch - offers from the Watched: Ongoing tab, watch_cl - offers from the Watched: Ended tab, sell - offers from the Selling tab, sold - offers from the Sold tab, not_sold - offers from the Not sold tab, future - offers from the Scheduled for listing tab).
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemsArray Array of offer identifiers.
     * @param int                               $limit Parameter which allows for defining a size of data portions (min. 1, max. 100; 25 by default).
     * @param int                               $offset Parameter which allows to control the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoMyAccount2Response
     */
    public function myAccount($sessionId, $accountType, $itemsArray = array(), $limit = 25, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoMyAccount2Request($sessionId, $accountType, $offset, $itemsArray, $limit);
        return $this->doMyAccount2($parameters);
    }

    /**
     * This method allows for loading information on number of offers in particular tabs of My Allegro (bid, bought, not bought, watched: ongoing, watched: ended, on sale, sold, not sold, to be listed) of a logged-in user. It is possible to load information on number of offers from the given tab using the list passed in itemsArray.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1175?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string                            $accountType Selected type of My Allegro tab (bid - offers from the Bidding tab, won - offers from the Bought tab, not_won - offers from the Not bought tab, watch - offers from the Watched: Ongoing tab, watch_cl - offers from the Watched: Ended tab, sell - offers from the Selling tab, sold - offers from the Sold tab, not_sold - offers from the Not sold tab, future - offers from the Scheduled for listing tab).
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemsArray Array of offer identifiers.
     * @return Allegro_Web_Api_DoMyAccountItemsCountResponse
     */
    public function myAccountItemsCount($sessionId, $accountType = Allegro_Web_Api_DoMyAccountItemsCountRequest::ACCOUNT_TYPE_TAB_SOLD,
                                        $itemsArray = array())
    {
        $parameters = new Allegro_Web_Api_DoMyAccountItemsCountRequest($sessionId, $accountType, $itemsArray);
        return $this->doMyAccountItemsCount($parameters);
    }

    /**
     * This method allows to load the current account balance from an account of a logged-in user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1176?lang=en
     *
     * @param string $sessionId
     * @return Allegro_Web_Api_DoMyBillingResponse
     */
    public function myBilling($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoMyBillingRequest($sessionId);
        return $this->doMyBilling($parameters);
    }

    /**
     * This method allows for checking costs related to offer listing and fees for sale. You can only check costs of offers of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1161?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier.
     * @param string $option Information on a form in which data are to be returned (S - only summary of costs, F - summary of costs divided into components with description; default value is S).
     * @return Allegro_Web_Api_DoMyBillingItemResponse
     */
    public function myBillingItem($sessionId, $itemId, $option = Allegro_Web_Api_DoMyBillingItemRequest::OPTION_SUMMARY_COST)
    {
        $parameters = new Allegro_Web_Api_DoMyBillingItemRequest($sessionId, $itemId, $option);
        return $this->doMyBillingItem($parameters);
    }

    /**
     * This method allows for loading contact data of buyers in offers of a logged-in user. In the case of providing an invalid offer identifier, a relevant structure will not be returned. The method does not return data for offers moved to the archive.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1177?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $auctionIdList Array of offer identifiers.
     * @param int                               $offset Parameter that controls the process of getting information about single offers from a transferred array of offer IDs (the offset is indexed from 0 and acts as an iterator for next elements of the mentioned array). Up to 25 results can be returned.
     * @return Allegro_Web_Api_DoMyContactResponse Array of structures containing information on buyers.
     */
    public function myContact($sessionId, $auctionIdList, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoMyContactRequest($sessionId, $auctionIdList, $offset, 0);
        return $this->doMyContact($parameters);
    }

    /**
     * This method allows for loading information on feedback of a logged-in user. By default, the list of 25 recent feedbacks is returned (those which have been left or received), sorted descending by time when they were left. The initial place to start loading the list of feedback can be controlled by using the offset parameter. If offer identifiers for which no feedbacks have been left are provided in the input array, these identifiers will be ignored and information will be returned only for those offers for which it is possible.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1178?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string                            $feedbackType Type of returned feedback (fb_recvd - received feedback is returned, fb_gave - posted feedback is returned).
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemArray Array of offer identifiers (max. 100).
     * @param int                               $offset Parameter which allows for setting the initial position to start loading the list of feedback. The parameter's value indicates feedback (taking into account the method of sorting the list - descending sort by the date of posting) to start loading the package of 25 feedbacks with (feedback is indexed from 0).
     * @return Allegro_Web_Api_DoMyFeedback2Response
     */
    public function myFeedback($sessionId, $feedbackType = Allegro_Web_Api_DoMyFeedback2Request::FEEDBACK_TYPE_RECEIVED,
                               $itemArray = array(), $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoMyFeedback2Request($sessionId, $feedbackType, $offset, 0, $itemArray);
        return $this->doMyFeedback2($parameters);
    }

    /**
     * This method allows for loading in bites of information on feedbacks of a logged-in user. By default, the list of all feedbacks is returned (those which have been left or received), sorted descending by time when they were left. The place where the list of feedbacks is to be loaded can be controlled using the offset parameter, while the size of data bits to be returned is controlled by the packageElement parameter. If offer identifiers for which no feedbacks have been left are provided in the input array, these identifiers will be ignored and information will be returned only for those offers for which it is possible.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1179?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string                            $feedbackType Type of returned feedback (fb_recvd - received feedback is returned, fb_gave - posted feedback is returned).
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemArray Array of offer identifiers (max. 100).
     * @param int                               $offset Parameter which allows for setting the initial position to start loading the list of feedback. The parameter's value indicates feedback (taking into account the method of sorting the list - descending sort by the date of posting) to start loading the package of 25 feedbacks with (feedback is indexed from 0).
     * @param int                               $limit Parameter which allows for defining a size of data bits (min. 1; by default 0 - the whole feedback list is loaded).
     * @return Allegro_Web_Api_DoMyFeedback2LimitResponse
     */
    public function myFeedbackLimit($sessionId, $feedbackType = Allegro_Web_Api_DoMyFeedback2LimitRequest::FEEDBACK_TYPE_RECEIVED,
                                    $itemArray = array(), $limit = 0, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoMyFeedback2LimitRequest($sessionId, $feedbackType, $offset, 0, $itemArray, $limit);
        return $this->doMyFeedback2Limit($parameters);
    }

    /**
     * This method allows for listing a new offer. In order to verify the new offer you need to assign it a local identifier (localId) and then check the offer using the doVerifyItem method (localId value is always unique within a given user account). To test whether sale form fields are filled out correctly and/or check costs of listing the offer but without actually doing it, you need to use the doCheckNewAuctionExt method. To list an offer including more than one variant, transfer the fid of a parameter that supports variants in variants. Besides, transfer via quantities the mask (mask field) that reflects variant and quantity listed within the variant (quantity field). The sum of all variants will match the quantity listed within the offer. However, remember that transferring proper parameter and providing available quantity does not mean that you do not have to include this information in fields. If the quantity provided in quantities and fid 5 does not match, the system will take the value provided in the array.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1180?lang=en
     *
     * @param string                                   $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfFieldsvalue       $fields Array of structures containing information on sale form fields (their list can be loaded by using the doGetSellFormFieldsExt(Limit) method. When an identifier of a particular field is passed in the fid field, you need to send its value in an appropriate for its type fvalue field and pass empty string of characters [string] - sending 0 (numeric types) or logical value 'false' [boolean] in other fvalue fields. Pass only required or desirable fieds. http:/www.allegro.pl/webapi/documentation.php/show/id,1110 http://www.allegro.pl/webapi/documentation.php/show/id,1111
     * @param int                                      $itemTemplateId Offer template identifier (when correct identifier is provided, filling out the fields structure is not required; in such case passing single values in the fields structure will overwrite values from the template but without changing the template; if itemTemplateOption is set to 1 it is possible to create new template on a basis of already existing one and fields passed in the fields structure).
     * @param int                                      $localId Value of a local identifier that can be additionally assigned to an offer (scope: 1-9999999999999). Local identifiers are valid until transferring related offers to archive.
     * @param Allegro_Web_Api_ItemTemplateCreateStruct $itemTemplateCreate Structure containing information on an offer saved as a template.
     * @param Allegro_Web_Api_ArrayOfVariantstruct     $variants This structure includes information on item variants available within the listed offer.
     * @param Allegro_Web_Api_ArrayOfTagnamestruct     $tags (doesn't exist in documentation)
     * @return Allegro_Web_Api_DoNewAuctionExtResponse
     */
    public function newAuctionExt($sessionId, $fields, $itemTemplateId = 0, $localId = 0,
                                  Allegro_Web_Api_ItemTemplateCreateStruct $itemTemplateCreate = null,
                                  Allegro_Web_Api_ArrayOfVariantstruct $variants = null,
                                  Allegro_Web_Api_ArrayOfTagnamestruct $tags = null)
    {
        $parameters = new Allegro_Web_Api_DoNewAuctionExtRequest($sessionId, $fields, $itemTemplateId, $localId,
            $itemTemplateCreate, $variants, $tags);
        return $this->doNewAuctionExt($parameters);
    }

    /**
     * This method allows for loading values of all versioned components and enables preview of version keys for all countries.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1083?lang=en
     *
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param string $webapiKey User's WebAPI key.
     * @return Allegro_Web_Api_DoQueryAllSysStatusResponse Array of structures containing information on components and version keys.
     */
    public function queryAllSysStatus($webapiKey, $countryId)
    {
        $parameters = new Allegro_Web_Api_DoQueryAllSysStatusRequest($countryId, $webapiKey);
        return $this->doQueryAllSysStatus($parameters);
    }

    /**
     * This method allows for loading the value of one versioned components (category tree and sale form fields) and enables preview of version key for a particular country.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1079?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $sysvar Component whose value is to be loaded (3 - category's tree structure, 4 - fields of a sale form).
     * @return Allegro_Web_Api_DoQuerySysStatusResponse
     */
    public function querySysStatus($webapiKey, $countryId, $sysvar = Allegro_Web_Api_DoQuerySysStatusRequest::SYSVAR_CATEGORY_TREE)
    {
        $parameters = new Allegro_Web_Api_DoQuerySysStatusRequest($sysvar, $countryId, $webapiKey);
        return $this->doQuerySysStatus($parameters);
    }

    /**
     *﻿This method allows for removing indicated users from blacklist of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1181?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $usersIdArray Array of user identifiers (max. 25).
     * @return Allegro_Web_Api_DoRemoveFromBlackListResponse Array of structures containing information on operation results.
     */
    public function removeFromBlackList($sessionId, $usersIdArray)
    {
        $parameters = new Allegro_Web_Api_DoRemoveFromBlackListRequest($sessionId, $usersIdArray);
        return $this->doRemoveFromBlackList($parameters);
    }

    /**
     * This method allows to remove selected offers from the list of all watched offers (ongoing and ended) of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1117?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $itemIds Array of offer identifiers (max. 25).
     * @return Allegro_Web_Api_DoRemoveFromWatchListResponse Array of structures containing information on operation results.
     */
    public function removeFromWatchList($sessionId, $itemIds)
    {
        $parameters = new Allegro_Web_Api_DoRemoveFromWatchListRequest($sessionId, $itemIds);
        return $this->doRemoveFromWatchList($parameters);
    }

    /**
     * This method allows for removing offer templates saved to an account of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1193?lang=en
     *
     * @param string                           $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfInt|int[] $itemTemplateIds Array of identifiers of offer templates.
     * @return Allegro_Web_Api_DoRemoveItemTemplatesResponse
     */
    public function removeItemTemplates($sessionId, $itemTemplateIds)
    {
        $parameters = new Allegro_Web_Api_DoRemoveItemTemplatesRequest($sessionId, $itemTemplateIds);
        return $this->doRemoveItemTemplates($parameters);
    }

    /**
     * This method allows for sending a request to cancel a bid made by a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1126?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemId Offer identifier.
     * @param string $requestCancelReason Bid cancellation reason.
     * @return Allegro_Web_Api_DoRequestCancelBidResponse Information on whether the request for bid cancellation has been sent successfully (1 - yes, 0 - no).
     */
    public function requestCancelBid($sessionId, $itemId, $requestCancelReason)
    {
        $parameters = new Allegro_Web_Api_DoRequestCancelBidRequest($sessionId, $itemId, $requestCancelReason);
        return $this->doRequestCancelBid($parameters);
    }

    /**
     * This method allows to withdraw PayU funds into the bank account assigned to the user's account.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1149?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @return Allegro_Web_Api_DoRequestPayoutResponse
     */
    public function requestPayout($sessionId)
    {
        $parameters = new Allegro_Web_Api_DoRequestPayoutRequest($sessionId);
        return $this->doRequestPayout($parameters);
    }

    /**
     * This method allows to apply for an additional payment if a payment for a given transaction is incomplete. Only one additional payment application can be sent per transaction.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1071?lang=en
     *
     * @param string $sessionId
     * @param int    $surchargeTransId
     * @param float  $surchargeValue
     * @param string $surchargeMessage
     * @return Allegro_Web_Api_DoRequestSurchargeResponse Operation result (1 - request has been sent, 0 - request has not been sent).
     */
    public function requestSurcharge($sessionId, $surchargeTransId, $surchargeValue, $surchargeMessage = '')
    {
        $parameters = new Allegro_Web_Api_DoRequestSurchargeRequest($sessionId, $surchargeTransId, $surchargeValue, $surchargeMessage);
        return $this->doRequestSurcharge($parameters);
    }

    /**
     * This method allows for supporting the search engine (including advanced search options). By default 50 offers matching the query are returned, which are sorted ascending by time left (first, promoted options are listed followed by non-promoted ones). In addition, information is returned on the total number of offers found. The size of portion can be regulated by the searchLimit parameter, while searchOffset allows to control the loading of next data portions. The method also supports the stopwords mechanism - if any such word is contained in the search query, this information will be returned in the searchExcludedWords array.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1100?lang=en
     *
     * @param string                        $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_SearchOptType $searchQuery Structure containing information defining search queries.
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function search($sessionId, Allegro_Web_Api_SearchOptType $searchQuery)
    {
        $parameters = new Allegro_Web_Api_DoSearchRequest($sessionId, $searchQuery);
        return $this->doSearch($parameters);
    }

    /**
     * This method allows to list an offer based on already existing offers. Because of particular mechanism of relisting offers, offers identifiers that are returned on output are in fact identifiers of offers serving as base for listing new offers, therefore these are not identifiers of newly listed offers. In order to check the identifier of a newly listed offer you need to give it a local identifier while calling doSellSomeAgain and use it in the doVerifyItem method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1130?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $sellItemsArray Array of identifiers of offers to be relisted (max. 25).
     * @param int                               $sellStartingTime Offer listing date (in the Unix time format). When offers are to be listed right away, pass 0.
     * @param int                               $sellAuctionDuration Offer duration time expressed in days (acceptable values: 3, 5, 7, 10, 14 and 21 - last for: Russia, Ukraine, Romania and Serbia).
     * @param int                               $sellOptions Parameter allowing to indicate additional actions to be taken after relisting offer (1 - remove source offers from the proper tab of My Allegro, 2 - send e-mail confirming listing offer, 3 - both).
     * @param Allegro_Web_Api_ArrayOfInt|int[]  $localIds Array of local identifiers to be additionally assigned to offers (range: 1-9999999999999).
     * @param int                               $sellProlongOptions (doesn't exist in documentation)
     * @return Allegro_Web_Api_DoSellSomeAgainResponse
     */
    public function sellSomeAgain($sessionId, $sellItemsArray,
                                  $sellAuctionDuration = Allegro_Web_Api_DoSellSomeAgainRequest::AUCTION_DURATION_7DAYS,
                                  $sellOptions = Allegro_Web_Api_DoSellSomeAgainRequest::OPTION_REMOVE_SOURCE,
                                  $sellStartingTime = 0, $localIds = array(), $sellProlongOptions = 0)
    {
        $parameters = new Allegro_Web_Api_DoSellSomeAgainRequest($sessionId, $sellItemsArray, $sellStartingTime,
            $sellAuctionDuration, $sellOptions, $localIds, $sellProlongOptions);
        return $this->doSellSomeAgain($parameters);
    }

    /**
     * This method allows for listing an offer in Allegro Shop on a basis of an already existing offers. Because of particular mechanism of relisting offers, offers identifiers that are returned on output are in fact identifiers of offers serving as base for listing new offers, therefore these are not identifiers of newly listed offers. In order to check the number of a newly listed offer you need to give it a local identifier while calling doSellSomeAgainInShop and use it in the doVerifyItem method.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1124?lang=en
     *
     * @param string                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfLong|int[] $sellItemsArray Array of identifiers of offers to be relisted (max. 25).
     * @param int                               $sellStartingTime Offer listing date (in the Unix time format). When offers are to be listed right away, pass 0.
     * @param int                               $sellShopDuration Offer duration time expressed in days (the only acceptable value for Allegro Shop is 30).
     * @param int                               $sellShopOptions Parameter allowing to indicate additional actions to be taken after relisting offer (1 - remove source offers from the proper tab of My Allegro, 2 - send e-mail confirming listing offer, 3 - both).
     * @param int                               $sellProlongOptions Parameter allowing to set offer relisting (0 - disable relisting offers, 1 - relisting offers with full set of items, 2 - relisting offers only with not sold items; default value is 0).
     * @param int                               $sellShopCategory Identifier of a user categories from Allegro Shop (the list of shop categories of a logged-in user can be obtained by using the doGetShopCatsData method). When default value (0) is provided, offers will be listed in shop categories of source offers (if the shop category in the given source offer has not been selected, related offer will be listed in Other category).
     * @param Allegro_Web_Api_ArrayOfInt|int[]  $localIds Array of local identifiers to be additionally assigned to offers (range: 1-9999999999999).
     * @return Allegro_Web_Api_DoSellSomeAgainInShopResponse
     */
    public function sellSomeAgainInShop($sessionId, $sellItemsArray,
                                        $sellShopDuration = Allegro_Web_Api_DoSellSomeAgainInShopRequest::AUCTION_DURATION_30DAYS,
                                        $sellStartingTime = 0,
                                        $sellShopOptions = Allegro_Web_Api_DoSellSomeAgainInShopRequest::OPTION_REMOVE_SOURCE,
                                        $sellProlongOptions = Allegro_Web_Api_DoSellSomeAgainInShopRequest::PROLONG_OPTION_DISABLED,
                                        $sellShopCategory = 0,
                                        $localIds = array())
    {
        $parameters = new Allegro_Web_Api_DoSellSomeAgainInShopRequest($sessionId, $sellItemsArray, $sellStartingTime,
            $sellShopDuration, $sellShopOptions, $sellProlongOptions, $sellShopCategory, $localIds);
        return $this->doSellSomeAgainInShop($parameters);
    }

    /**
     * This method allows for sending a particular type of message to a selected user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1156?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $mailToUserItemId (non-required if mailToUserReceiverId and mailToUserSubjectId have been provided) Offer identifier (for query: Ask a seller).
     * @param int    $mailToUserReceiverId (non-required if mailToUserItemId has been provided) User identifier (for query: Send an e-mail to a user).
     * @param int    $mailToUserSubjectId (required if mailToUserReceiverId has been provided) Option for a message subject (1 - Message to Allegro user, 2 - Item query, 3 - Message about delivery, 4 - Message about payment, 5 - Acknowledgment for transaction).
     * @param string $mailToUserMessage Content of a message.
     * @param int    $mailToUserOption Option allowing to indicate whether a copy of the message is to be sent to a logged-in user (1 - yes, 0 - no). Default value is 0.
     * @return Allegro_Web_Api_DoSendEmailToUserResponse
     */
    public function sendEmailToUser($sessionId, $mailToUserItemId, $mailToUserReceiverId,
                                    $mailToUserSubjectId, $mailToUserMessage, $mailToUserOption = 0)
    {
        $parameters = new Allegro_Web_Api_DoSendEmailToUserRequest($sessionId, $mailToUserItemId, $mailToUserReceiverId,
            $mailToUserSubjectId, $mailToUserOption, $mailToUserMessage);
        return $this->doSendEmailToUser($parameters);
    }

    /**
     * This method allows for filling out and sending the after-sale form. When the after-sale form is successfully sent it is possible to automatically redirect the customer who wishes to make a payment to the website of a proper bank (on condition that the bank enables the pay-by-link option) using the PayU mechanism (more information on integration can be found in service technical documentation: http://goo.gl/6rlFJ [PDF]). Note: at this stage this method does not process the general delivery.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1140?lang=en
     *
     * @param string                                            $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller Array of structures containing information on sellers and offers that the form is to be filled out for.
     * @param Allegro_Web_Api_NewPostBuyFormCommonStruct        $newPostBuyFormCommon Structure with data from sale form fields.
     * @return Allegro_Web_Api_DoSendPostBuyFormResponse
     */
    public function sendPostBuyForm($sessionId, Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller,
                                    Allegro_Web_Api_NewPostBuyFormCommonStruct $newPostBuyFormCommon)
    {
        $parameters = new Allegro_Web_Api_DoSendPostBuyFormRequest($sessionId, $newPostBuyFormSeller, $newPostBuyFormCommon);
        return $this->doSendPostBuyForm($parameters);
    }

    /**
     * This method is for sending a commission refund form related to transactions not completed by buyers within offers of a logged-in user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1462?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $dealId Identifier of a purchase transaction (received using doGetRefundsDeals).
     * @param int    $reasonId ID of a reason for commission refund (their list can be obtained using the doGetRefundsReasons method).
     * @param int    $refundQuantity Quantity for which the commission refund form is filled in.
     * @return Allegro_Web_Api_DoSendRefundFormResponse Commission refund form ID.
     */
    public function sendRefundForm($sessionId, $dealId, $reasonId, $refundQuantity)
    {
        $parameters = new Allegro_Web_Api_DoSendRefundFormRequest($sessionId, $dealId, $reasonId, $refundQuantity);
        return $this->doSendRefundForm($parameters);
    }

    /**
     * This method is for activating, deactivating and defining free shipping limit.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,101542?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $activeFlag Status of free shipping limit (1 - deactivated, 2 - activated).
     * @param float  $freeDeliveryAmount Free shipping limit.
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountResponse Confirming successful operation (true).
     */
    public function setFreeDeliveryAmount($sessionId,
                                          $activeFlag = Allegro_Web_Api_DoSetFreeDeliveryAmountRequest::ACTIVE_FLAG_YES,
                                          $freeDeliveryAmount = 0.0)
    {
        $parameters = new Allegro_Web_Api_DoSetFreeDeliveryAmountRequest($sessionId, $activeFlag, $freeDeliveryAmount);
        return $this->doSetFreeDeliveryAmount($parameters);
    }

    /**
     * This method allows for defining the scheme used to calculate shipping costs for offers having different shipment price lists.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1322?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $shipmentPriceTypeId Identifier of the shipping costs calculation scheme (1 – the most expensive shipment, 2 – the cheapest shipment, 3 – consignments will be sent separately; the shipping cost is the sum of costs of shipping each consignment).
     * @return Allegro_Web_Api_DoSetShipmentPriceTypeResponse Confirmation of transaction cancellation (1).
     */
    public function setShipmentPriceType($sessionId,
                                         $shipmentPriceTypeId = Allegro_Web_Api_DoSetShipmentPriceTypeRequest::PRICE_TYPE_CHEAPEST)
    {
        $parameters = new Allegro_Web_Api_DoSetShipmentPriceTypeRequest($sessionId, $shipmentPriceTypeId);
        return $this->doSetShipmentPriceType($parameters);
    }

    /**
     * This method allows the key owner to set the expiry date of a license belonging to an indicated user.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1183?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param string $userLogin Username.
     * @param int    $userCountryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param float  $expireDate User's license expiration date.
     * @return Allegro_Web_Api_DoSetUserLicenceDateResponse Operation result (1 - success, 0 - fail).
     */
    public function setUserLicenceDate($sessionId, $userLogin, $userCountryId, $expireDate)
    {
        $parameters = new Allegro_Web_Api_DoSetUserLicenceDateRequest($sessionId, $userLogin, $userCountryId, $expireDate);
        return $this->doSetUserLicenceDate($parameters);
    }

    /**
     * This method allows for loading listing of all ongoing offers from the selected category (with additional information on categories related to the selected one). By default 50 offers are returned, which are sorted ascending by time left (first, promoted options are listed followed by non-promoted ones). The size of portion can be regulated by the catItemsLimit parameter and the catItemsOffset parameter allows to control the process of loading next portions of data.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1129?lang=en
     *
     * @param string                             $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int                                $categoryId Category identifier (for 0 list of platform's main category will be returned - without ongoing offers; when main category identifiers are passed a list of first-tier subcategories of the given categories will be returned - also without ongoing offers).
     * @param int                                $catItemState Region/province identifier appropriate for a country of a logged user (list of region identifiers can be loaded using the doGetStatesInfo method).
     * @param int                                $catItemOption One value or sum of selected values should be selected (1 - only offers of Buy it Now! type [no bidding] will be returned, 2 - only offers of classified ads type will be returned, 4 - only bidding type offers will be returned, 8 - only offers with personal pickup will be returned, 16 - only offers with option of VAT invoice issuance will be returned, 32 - only offers supporting All for Planet foundation will be returned, 64 - only offers allowing unregistered users to make a purchase will be returned, 128 - only offers allowing for general delivery will be returned, 256 - only offers marked as Standard Allegro [PL]/Aukro Plus [CZ]/Super Offer [UA/KZ] will be returned, 512 - only offers with free shipping will be returned, 1024 - search among offers with option of delivery via NovayaPochta [UA], 2048 - search only among offers with 'New' value in the 'Status' parameter, 4096 - search only among offers with 'Used' value in the 'Status' parameter).
     * @param Allegro_Web_Api_DurationTimeInfo   $catItemDurationOption Structure containing information on offer's time of duration.
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $catAttribFields Array of structures containing information on parameters in the given category (their list can be loaded using the doGetSellFormAttribs method. When an identifier of a particular parameter is passed in the fid field, you need to send its value in an appropriate for its type fvalue field and pass empty string of characters [string] - sending 0 (numeric types) or logical value 'false' [boolean] in other fvalue fields).
     * @param int                                $catSortOptions Sorting the search result of offers (one value to be selected: 1 - sorting the result by offer ending time: ascending, 2 - sorting the result by offer ending time: descending, 3 - sorting the result alphabetically by offer title: ascending, 4 - sorting the result alphabetically by offer title: descending, 5 - sorting the result by item price: ascending, 6 - sorting the result by item price: descending, 7 - sorting the result by the number of offers: ascending, 8 - sorting the result by the number of offers, 16 - sorting the result by relevance: descending; default value is 1).
     * @param Allegro_Web_Api_PriceCatInfo       $catItemsPrice Structure containing information on offer's price scope.
     * @param int                                $fulfillmentTime Time of realization (in hours: 24/48/72/96/120/168/240/336/504/999; 999 = 'more'). in UA/KZ it works as 'Sent within' with an additional value 1 ('immediately').
     * @param int                                $limit Parameter which allows for defining a size of data portion (scope 1-100; 50 by default).
     * @param int                                $offset Parameter which allows for controlling the process of loading new data portions (portion numbers are indexed from 0).
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function showCat($sessionId, $categoryId, $catItemState = 0, $catItemOption = 0,
                            Allegro_Web_Api_DurationTimeInfo $catItemDurationOption = null,
                            Allegro_Web_Api_ArrayOfFieldsvalue $catAttribFields = null,
                            $catSortOptions = Allegro_Web_Api_DoShowCatRequest::SORT_BY_ENDING_ASC,
                            Allegro_Web_Api_PriceCatInfo $catItemsPrice = null,
                            $fulfillmentTime = Allegro_Web_Api_DoShowCatRequest::FULFILLMENT_TIME_NOW,
                            $limit = 50, $offset = 0)
    {
        $parameters = new Allegro_Web_Api_DoShowCatRequest($sessionId, $categoryId, $catItemState, $catItemOption,
            $catItemDurationOption, $catAttribFields, $catSortOptions, $catItemsPrice, $offset, $limit, $fulfillmentTime);
        return $this->doShowCat($parameters);
    }

    /**
     * This method allows for loading all available data (description, category, photos, parameters, available delivery and payment methods, etc.) about the selected offer.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1127?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $itemsId Offer identifier.
     * @param int    $getDesc Parameter indicating whether an offer description is to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int    $getImageUrl Parameter indicating whether links to photos are to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int    $getAttribs Parameter indicating whether a list of parameters assigned to an offer is to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int    $getPostageOptions Parameter indicating whether shipment options for an offer are to be loaded (1 - yes, 0 - no; default value: 0).
     * @param int    $getCompanyInfo Parameter indicating whether data of a user listing the offer is to be loaded (it refers only to offers listed from company accounts; 1 - yes, 0 - no; default value: 0).
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function showItemInfoExt($sessionId, $itemsId, $getDesc = 0, $getImageUrl = 0,
                                    $getAttribs = 0, $getPostageOptions = 0, $getCompanyInfo = 0)
    {
        $parameters = new Allegro_Web_Api_DoShowItemInfoExtRequest($sessionId, $itemsId, $getDesc, $getImageUrl, $getAttribs, $getPostageOptions, $getCompanyInfo, 0);
        return $this->doShowItemInfoExt($parameters);
    }

    /**
     * This method allows for loading publicly available information on any user. The user can be indicated by the identifier or username - when value is passed in both parameters, data of a user indicated by the userId parameter are returned.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1125?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $userId User identifier.
     * @param string $userLogin can be used instead of $userId
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function showUser($webapiKey, $countryId, $userId, $userLogin = '')
    {
        $parameters = new Allegro_Web_Api_DoShowUserRequest($webapiKey, $countryId, $userId, $userLogin);
        return $this->doShowUser($parameters);
    }

    /**
     * This method allows to preview the content of the 'About me' page of any user.
     *
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1162?lang=en
     *
     * @param string $webapiKey User's WebAPI key.
     * @param int    $countryId Country identifier (a list of country identifiers can be loaded using the doGetCountries method).
     * @param int    $userId User identifier.
     * @return Allegro_Web_Api_DoShowUserPageResponse
     */
    public function showUserPage($webapiKey, $countryId, $userId)
    {
        $parameters = new Allegro_Web_Api_DoShowUserPageRequest($webapiKey, $countryId, $userId);
        return $this->doShowUserPage($parameters);
    }

    /**
     * This method allows for checking the correctness of listing an offer (created by the doNewAuctionExt method when a value of the localId parameter has been passed while calling it) from an account of a logged-in user as well as a idenitifier of a relisted offer (created by using doSellSomeAgain/doSellSomeAgainInShop when a value of the localId parameter has been passed while calling them). localId value is always unique within a given user account.
     * @todo test
     * @link http:/allegro.pl/webapi/documentation.php/show/id,1075?lang=en
     *
     * @param string $sessionId User's session identifier received using the doLogin(Enc) method.
     * @param int    $localId Value of a local identifier that has been passed while listing an offer using the doNewAuctionExt/doSellSomeAgain/doSellSomeAgainShop method.
     * @return Allegro_Web_Api_DoVerifyItemResponse
     */
    public function verifyItem($sessionId, $localId)
    {
        $parameters = new Allegro_Web_Api_DoVerifyItemRequest($sessionId, $localId);
        return $this->doVerifyItem($parameters);
    }
}
