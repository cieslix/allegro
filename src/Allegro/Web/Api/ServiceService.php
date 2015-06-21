<?php

/**
 * Class Allegro_Web_Api_ServiceService
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ServiceService extends SoapClient
{
    /**
     * @var array
     */
    protected $_defaultOptions = array(
        'features'    => SOAP_SINGLE_ELEMENT_ARRAYS, // required
        'cache_wsdl'  => WSDL_CACHE_MEMORY,
        'compression' => SOAP_COMPRESSION_ACCEPT,
        'classmap'    => array(
            'ArrayOfLong'                              => 'Allegro_Web_Api_ArrayOfLong',
            'DoAddDescToItemsRequest'                  => 'Allegro_Web_Api_DoAddDescToItemsRequest',
            'doAddDescToItemsResponse'                 => 'Allegro_Web_Api_DoAddDescToItemsResponse',
            'PackageInfoStruct'                        => 'Allegro_Web_Api_PackageInfoStruct',
            'ArrayOfPackageinfostruct'                 => 'Allegro_Web_Api_ArrayOfPackageinfostruct',
            'DoAddPackageInfoToPostBuyFormRequest'     => 'Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest',
            'ArrayOfString'                            => 'Allegro_Web_Api_ArrayOfString',
            'PostBuyFormPackageInfoStruct'             => 'Allegro_Web_Api_PostBuyFormPackageInfoStruct',
            'doAddPackageInfoToPostBuyFormResponse'    => 'Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse',
            'UserBlackListStruct'                      => 'Allegro_Web_Api_UserBlackListStruct',
            'ArrayOfUserblackliststruct'               => 'Allegro_Web_Api_ArrayOfUserblackliststruct',
            'DoAddToBlackListRequest'                  => 'Allegro_Web_Api_DoAddToBlackListRequest',
            'UserBlackListAddResultStruct'             => 'Allegro_Web_Api_UserBlackListAddResultStruct',
            'ArrayOfUserblacklistaddresultstruct'      => 'Allegro_Web_Api_ArrayOfUserblacklistaddresultstruct',
            'doAddToBlackListResponse'                 => 'Allegro_Web_Api_DoAddToBlackListResponse',
            'DoAddToWatchListRequest'                  => 'Allegro_Web_Api_DoAddToWatchListRequest',
            'ItemsNotAddedStruct'                      => 'Allegro_Web_Api_ItemsNotAddedStruct',
            'ArrayOfItemsnotaddedstruct'               => 'Allegro_Web_Api_ArrayOfItemsnotaddedstruct',
            'WatchListInfoStruct'                      => 'Allegro_Web_Api_WatchListInfoStruct',
            'doAddToWatchListResponse'                 => 'Allegro_Web_Api_DoAddToWatchListResponse',
            'PharmacyRecipientDataStruct'              => 'Allegro_Web_Api_PharmacyRecipientDataStruct',
            'DoBidItemRequest'                         => 'Allegro_Web_Api_DoBidItemRequest',
            'doBidItemResponse'                        => 'Allegro_Web_Api_DoBidItemResponse',
            'ArrayOfInt'                               => 'Allegro_Web_Api_ArrayOfInt',
            'DoCancelBidItemRequest'                   => 'Allegro_Web_Api_DoCancelBidItemRequest',
            'doCancelBidItemResponse'                  => 'Allegro_Web_Api_DoCancelBidItemResponse',
            'DoCancelRefundFormRequest'                => 'Allegro_Web_Api_DoCancelRefundFormRequest',
            'doCancelRefundFormResponse'               => 'Allegro_Web_Api_DoCancelRefundFormResponse',
            'DoCancelRefundWarningRequest'             => 'Allegro_Web_Api_DoCancelRefundWarningRequest',
            'doCancelRefundWarningResponse'            => 'Allegro_Web_Api_DoCancelRefundWarningResponse',
            'DoCancelTransactionRequest'               => 'Allegro_Web_Api_DoCancelTransactionRequest',
            'doCancelTransactionResponse'              => 'Allegro_Web_Api_DoCancelTransactionResponse',
            'RangeIntValueStruct'                      => 'Allegro_Web_Api_RangeIntValueStruct',
            'RangeFloatValueStruct'                    => 'Allegro_Web_Api_RangeFloatValueStruct',
            'RangeDateValueStruct'                     => 'Allegro_Web_Api_RangeDateValueStruct',
            'FieldsValue'                              => 'Allegro_Web_Api_FieldsValue',
            'ArrayOfFieldsvalue'                       => 'Allegro_Web_Api_ArrayOfFieldsvalue',
            'VariantQuantityStruct'                    => 'Allegro_Web_Api_VariantQuantityStruct',
            'ArrayOfVariantquantitystruct'             => 'Allegro_Web_Api_ArrayOfVariantquantitystruct',
            'VariantStruct'                            => 'Allegro_Web_Api_VariantStruct',
            'ArrayOfVariantstruct'                     => 'Allegro_Web_Api_ArrayOfVariantstruct',
            'DoChangeItemFieldsRequest'                => 'Allegro_Web_Api_DoChangeItemFieldsRequest',
            'AmountStruct'                             => 'Allegro_Web_Api_AmountStruct',
            'ItemSurchargeStruct'                      => 'Allegro_Web_Api_ItemSurchargeStruct',
            'ArrayOfItemsurchargestruct'               => 'Allegro_Web_Api_ArrayOfItemsurchargestruct',
            'ChangedItemStruct'                        => 'Allegro_Web_Api_ChangedItemStruct',
            'doChangeItemFieldsResponse'               => 'Allegro_Web_Api_DoChangeItemFieldsResponse',
            'DoChangePriceItemRequest'                 => 'Allegro_Web_Api_DoChangePriceItemRequest',
            'doChangePriceItemResponse'                => 'Allegro_Web_Api_DoChangePriceItemResponse',
            'DoChangeQuantityItemRequest'              => 'Allegro_Web_Api_DoChangeQuantityItemRequest',
            'doChangeQuantityItemResponse'             => 'Allegro_Web_Api_DoChangeQuantityItemResponse',
            'DoCheckItemDescriptionRequest'            => 'Allegro_Web_Api_DoCheckItemDescriptionRequest',
            'ItemDescriptionStruct'                    => 'Allegro_Web_Api_ItemDescriptionStruct',
            'doCheckItemDescriptionResponse'           => 'Allegro_Web_Api_DoCheckItemDescriptionResponse',
            'DoCheckNewAuctionExtRequest'              => 'Allegro_Web_Api_DoCheckNewAuctionExtRequest',
            'doCheckNewAuctionExtResponse'             => 'Allegro_Web_Api_DoCheckNewAuctionExtResponse',
            'DoCreateItemTemplateRequest'              => 'Allegro_Web_Api_DoCreateItemTemplateRequest',
            'CreatedItemTemplateStruct'                => 'Allegro_Web_Api_CreatedItemTemplateStruct',
            'doCreateItemTemplateResponse'             => 'Allegro_Web_Api_DoCreateItemTemplateResponse',
            'SellRatingEstimationStruct'               => 'Allegro_Web_Api_SellRatingEstimationStruct',
            'ArrayOfSellratingestimationstruct'        => 'Allegro_Web_Api_ArrayOfSellratingestimationstruct',
            'DoFeedbackRequest'                        => 'Allegro_Web_Api_DoFeedbackRequest',
            'doFeedbackResponse'                       => 'Allegro_Web_Api_DoFeedbackResponse',
            'FeedbackManyStruct'                       => 'Allegro_Web_Api_FeedbackManyStruct',
            'ArrayOfFeedbackmanystruct'                => 'Allegro_Web_Api_ArrayOfFeedbackmanystruct',
            'DoFeedbackManyRequest'                    => 'Allegro_Web_Api_DoFeedbackManyRequest',
            'FeedbackResultStruct'                     => 'Allegro_Web_Api_FeedbackResultStruct',
            'ArrayOfFeedbackresultstruct'              => 'Allegro_Web_Api_ArrayOfFeedbackresultstruct',
            'doFeedbackManyResponse'                   => 'Allegro_Web_Api_DoFeedbackManyResponse',
            'DoFinishItemRequest'                      => 'Allegro_Web_Api_DoFinishItemRequest',
            'doFinishItemResponse'                     => 'Allegro_Web_Api_DoFinishItemResponse',
            'FinishItemsStruct'                        => 'Allegro_Web_Api_FinishItemsStruct',
            'ArrayOfFinishitemsstruct'                 => 'Allegro_Web_Api_ArrayOfFinishitemsstruct',
            'DoFinishItemsRequest'                     => 'Allegro_Web_Api_DoFinishItemsRequest',
            'FinishFailureStruct'                      => 'Allegro_Web_Api_FinishFailureStruct',
            'ArrayOfFinishfailurestruct'               => 'Allegro_Web_Api_ArrayOfFinishfailurestruct',
            'doFinishItemsResponse'                    => 'Allegro_Web_Api_DoFinishItemsResponse',
            'DoGetAdminUserLicenceDateRequest'         => 'Allegro_Web_Api_DoGetAdminUserLicenceDateRequest',
            'doGetAdminUserLicenceDateResponse'        => 'Allegro_Web_Api_DoGetAdminUserLicenceDateResponse',
            'DoGetArchiveRefundsListRequest'           => 'Allegro_Web_Api_DoGetArchiveRefundsListRequest',
            'ArchiveRefundsListTypeStruct'             => 'Allegro_Web_Api_ArchiveRefundsListTypeStruct',
            'ArrayOfArchiverefundslisttypestruct'      => 'Allegro_Web_Api_ArrayOfArchiverefundslisttypestruct',
            'doGetArchiveRefundsListResponse'          => 'Allegro_Web_Api_DoGetArchiveRefundsListResponse',
            'DoGetBidItem2Request'                     => 'Allegro_Web_Api_DoGetBidItem2Request',
            'BidListStruct2'                           => 'Allegro_Web_Api_BidListStruct2',
            'ArrayOfBidliststruct2'                    => 'Allegro_Web_Api_ArrayOfBidliststruct2',
            'doGetBidItem2Response'                    => 'Allegro_Web_Api_DoGetBidItem2Response',
            'DoGetBlackListUsersRequest'               => 'Allegro_Web_Api_DoGetBlackListUsersRequest',
            'BlackListStruct'                          => 'Allegro_Web_Api_BlackListStruct',
            'ArrayOfBlackliststruct'                   => 'Allegro_Web_Api_ArrayOfBlackliststruct',
            'doGetBlackListUsersResponse'              => 'Allegro_Web_Api_DoGetBlackListUsersResponse',
            'DoGetCategoryPathRequest'                 => 'Allegro_Web_Api_DoGetCategoryPathRequest',
            'CategoryData'                             => 'Allegro_Web_Api_CategoryData',
            'ArrayOfCategorydata'                      => 'Allegro_Web_Api_ArrayOfCategorydata',
            'doGetCategoryPathResponse'                => 'Allegro_Web_Api_DoGetCategoryPathResponse',
            'DoGetCatsDataRequest'                     => 'Allegro_Web_Api_DoGetCatsDataRequest',
            'CatInfoType'                              => 'Allegro_Web_Api_CatInfoType',
            'ArrayOfCatinfotype'                       => 'Allegro_Web_Api_ArrayOfCatinfotype',
            'doGetCatsDataResponse'                    => 'Allegro_Web_Api_DoGetCatsDataResponse',
            'DoGetCatsDataCountRequest'                => 'Allegro_Web_Api_DoGetCatsDataCountRequest',
            'doGetCatsDataCountResponse'               => 'Allegro_Web_Api_DoGetCatsDataCountResponse',
            'DoGetCatsDataLimitRequest'                => 'Allegro_Web_Api_DoGetCatsDataLimitRequest',
            'doGetCatsDataLimitResponse'               => 'Allegro_Web_Api_DoGetCatsDataLimitResponse',
            'DoGetCountriesRequest'                    => 'Allegro_Web_Api_DoGetCountriesRequest',
            'CountryInfoType'                          => 'Allegro_Web_Api_CountryInfoType',
            'ArrayOfCountryinfotype'                   => 'Allegro_Web_Api_ArrayOfCountryinfotype',
            'doGetCountriesResponse'                   => 'Allegro_Web_Api_DoGetCountriesResponse',
            'DoGetDealsRequest'                        => 'Allegro_Web_Api_DoGetDealsRequest',
            'DealsStruct'                              => 'Allegro_Web_Api_DealsStruct',
            'ArrayOfDealsstruct'                       => 'Allegro_Web_Api_ArrayOfDealsstruct',
            'doGetDealsResponse'                       => 'Allegro_Web_Api_DoGetDealsResponse',
            'DoGetFavouriteCategoriesRequest'          => 'Allegro_Web_Api_DoGetFavouriteCategoriesRequest',
            'FavouritesCategoriesStruct'               => 'Allegro_Web_Api_FavouritesCategoriesStruct',
            'ArrayOfFavouritescategoriesstruct'        => 'Allegro_Web_Api_ArrayOfFavouritescategoriesstruct',
            'doGetFavouriteCategoriesResponse'         => 'Allegro_Web_Api_DoGetFavouriteCategoriesResponse',
            'DoGetFavouriteSellersRequest'             => 'Allegro_Web_Api_DoGetFavouriteSellersRequest',
            'FavouritesSellersStruct'                  => 'Allegro_Web_Api_FavouritesSellersStruct',
            'ArrayOfFavouritessellersstruct'           => 'Allegro_Web_Api_ArrayOfFavouritessellersstruct',
            'doGetFavouriteSellersResponse'            => 'Allegro_Web_Api_DoGetFavouriteSellersResponse',
            'DoGetFeedbackRequest'                     => 'Allegro_Web_Api_DoGetFeedbackRequest',
            'FeedbackList'                             => 'Allegro_Web_Api_FeedbackList',
            'ArrayOfFeedbacklist'                      => 'Allegro_Web_Api_ArrayOfFeedbacklist',
            'doGetFeedbackResponse'                    => 'Allegro_Web_Api_DoGetFeedbackResponse',
            'DoGetFilledPostBuyFormsRequest'           => 'Allegro_Web_Api_DoGetFilledPostBuyFormsRequest',
            'FilledPostBuyFormsStruct'                 => 'Allegro_Web_Api_FilledPostBuyFormsStruct',
            'doGetFilledPostBuyFormsResponse'          => 'Allegro_Web_Api_DoGetFilledPostBuyFormsResponse',
            'DoGetFreeDeliveryAmountRequest'           => 'Allegro_Web_Api_DoGetFreeDeliveryAmountRequest',
            'doGetFreeDeliveryAmountResponse'          => 'Allegro_Web_Api_DoGetFreeDeliveryAmountResponse',
            'DoGetItemFieldsRequest'                   => 'Allegro_Web_Api_DoGetItemFieldsRequest',
            'doGetItemFieldsResponse'                  => 'Allegro_Web_Api_DoGetItemFieldsResponse',
            'DoGetItemTemplatesRequest'                => 'Allegro_Web_Api_DoGetItemTemplatesRequest',
            'ItemTemplateListStruct'                   => 'Allegro_Web_Api_ItemTemplateListStruct',
            'ArrayOfItemtemplateliststruct'            => 'Allegro_Web_Api_ArrayOfItemtemplateliststruct',
            'ItemTemplatesStruct'                      => 'Allegro_Web_Api_ItemTemplatesStruct',
            'doGetItemTemplatesResponse'               => 'Allegro_Web_Api_DoGetItemTemplatesResponse',
            'ItemGetImage'                             => 'Allegro_Web_Api_ItemGetImage',
            'ArrayOfItemgetimage'                      => 'Allegro_Web_Api_ArrayOfItemgetimage',
            'DoGetItemsImagesRequest'                  => 'Allegro_Web_Api_DoGetItemsImagesRequest',
            'ItemImageList'                            => 'Allegro_Web_Api_ItemImageList',
            'ArrayOfItemimagelist'                     => 'Allegro_Web_Api_ArrayOfItemimagelist',
            'ItemImagesStruct'                         => 'Allegro_Web_Api_ItemImagesStruct',
            'ArrayOfItemimagesstruct'                  => 'Allegro_Web_Api_ArrayOfItemimagesstruct',
            'doGetItemsImagesResponse'                 => 'Allegro_Web_Api_DoGetItemsImagesResponse',
            'DoGetItemsInfoRequest'                    => 'Allegro_Web_Api_DoGetItemsInfoRequest',
            'DurationInfoStruct'                       => 'Allegro_Web_Api_DurationInfoStruct',
            'ItemInfo'                                 => 'Allegro_Web_Api_ItemInfo',
            'ItemCatList'                              => 'Allegro_Web_Api_ItemCatList',
            'ArrayOfItemcatlist'                       => 'Allegro_Web_Api_ArrayOfItemcatlist',
            'AttribStruct'                             => 'Allegro_Web_Api_AttribStruct',
            'ArrayOfAttribstruct'                      => 'Allegro_Web_Api_ArrayOfAttribstruct',
            'FulfillmentTimeStruct'                    => 'Allegro_Web_Api_FulfillmentTimeStruct',
            'PostageStruct'                            => 'Allegro_Web_Api_PostageStruct',
            'ArrayOfPostagestruct'                     => 'Allegro_Web_Api_ArrayOfPostagestruct',
            'ItemPaymentOptions'                       => 'Allegro_Web_Api_ItemPaymentOptions',
            'CompanyInfoStruct'                        => 'Allegro_Web_Api_CompanyInfoStruct',
            'ProductParametersStruct'                  => 'Allegro_Web_Api_ProductParametersStruct',
            'ArrayOfProductparametersstruct'           => 'Allegro_Web_Api_ArrayOfProductparametersstruct',
            'ProductParametersGroupStruct'             => 'Allegro_Web_Api_ProductParametersGroupStruct',
            'ArrayOfProductparametersgroupstruct'      => 'Allegro_Web_Api_ArrayOfProductparametersgroupstruct',
            'ProductStruct'                            => 'Allegro_Web_Api_ProductStruct',
            'ItemInfoStruct'                           => 'Allegro_Web_Api_ItemInfoStruct',
            'ArrayOfIteminfostruct'                    => 'Allegro_Web_Api_ArrayOfIteminfostruct',
            'doGetItemsInfoResponse'                   => 'Allegro_Web_Api_DoGetItemsInfoResponse',
            'RangeValueType'                           => 'Allegro_Web_Api_RangeValueType',
            'FilterOptionsType'                        => 'Allegro_Web_Api_FilterOptionsType',
            'ArrayOfFilteroptionstype'                 => 'Allegro_Web_Api_ArrayOfFilteroptionstype',
            'SortOptionsType'                          => 'Allegro_Web_Api_SortOptionsType',
            'DoGetItemsListRequest'                    => 'Allegro_Web_Api_DoGetItemsListRequest',
            'UserInfoType'                             => 'Allegro_Web_Api_UserInfoType',
            'PriceInfoType'                            => 'Allegro_Web_Api_PriceInfoType',
            'ArrayOfPriceinfotype'                     => 'Allegro_Web_Api_ArrayOfPriceinfotype',
            'PhotoInfoType'                            => 'Allegro_Web_Api_PhotoInfoType',
            'ArrayOfPhotoinfotype'                     => 'Allegro_Web_Api_ArrayOfPhotoinfotype',
            'ParameterInfoType'                        => 'Allegro_Web_Api_ParameterInfoType',
            'ArrayOfParameterinfotype'                 => 'Allegro_Web_Api_ArrayOfParameterinfotype',
            'AdvertInfoType'                           => 'Allegro_Web_Api_AdvertInfoType',
            'ItemsListType'                            => 'Allegro_Web_Api_ItemsListType',
            'ArrayOfItemslisttype'                     => 'Allegro_Web_Api_ArrayOfItemslisttype',
            'CategoryTreeType'                         => 'Allegro_Web_Api_CategoryTreeType',
            'ArrayOfCategorytreetype'                  => 'Allegro_Web_Api_ArrayOfCategorytreetype',
            'CategoryPathType'                         => 'Allegro_Web_Api_CategoryPathType',
            'ArrayOfCategorypathtype'                  => 'Allegro_Web_Api_ArrayOfCategorypathtype',
            'CategoriesListType'                       => 'Allegro_Web_Api_CategoriesListType',
            'FilterValueType'                          => 'Allegro_Web_Api_FilterValueType',
            'ArrayOfFiltervaluetype'                   => 'Allegro_Web_Api_ArrayOfFiltervaluetype',
            'FilterRelationType'                       => 'Allegro_Web_Api_FilterRelationType',
            'FiltersListType'                          => 'Allegro_Web_Api_FiltersListType',
            'ArrayOfFilterslisttype'                   => 'Allegro_Web_Api_ArrayOfFilterslisttype',
            'doGetItemsListResponse'                   => 'Allegro_Web_Api_DoGetItemsListResponse',
            'DoGetMessageToBuyerRequest'               => 'Allegro_Web_Api_DoGetMessageToBuyerRequest',
            'MessageToBuyerStruct'                     => 'Allegro_Web_Api_MessageToBuyerStruct',
            'doGetMessageToBuyerResponse'              => 'Allegro_Web_Api_DoGetMessageToBuyerResponse',
            'DoGetMyAddressesRequest'                  => 'Allegro_Web_Api_DoGetMyAddressesRequest',
            'AddressUserDataStruct'                    => 'Allegro_Web_Api_AddressUserDataStruct',
            'AddressInfoStruct'                        => 'Allegro_Web_Api_AddressInfoStruct',
            'ArrayOfAddressinfostruct'                 => 'Allegro_Web_Api_ArrayOfAddressinfostruct',
            'doGetMyAddressesResponse'                 => 'Allegro_Web_Api_DoGetMyAddressesResponse',
            'SortOptionsStruct'                        => 'Allegro_Web_Api_SortOptionsStruct',
            'DoGetMyBidItemsRequest'                   => 'Allegro_Web_Api_DoGetMyBidItemsRequest',
            'ItemPriceStruct'                          => 'Allegro_Web_Api_ItemPriceStruct',
            'ArrayOfItempricestruct'                   => 'Allegro_Web_Api_ArrayOfItempricestruct',
            'UserInfoStruct'                           => 'Allegro_Web_Api_UserInfoStruct',
            'BidItemStruct'                            => 'Allegro_Web_Api_BidItemStruct',
            'ArrayOfBiditemstruct'                     => 'Allegro_Web_Api_ArrayOfBiditemstruct',
            'doGetMyBidItemsResponse'                  => 'Allegro_Web_Api_DoGetMyBidItemsResponse',
            'DoGetMyCurrentShipmentPriceTypeRequest'   => 'Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeRequest',
            'doGetMyCurrentShipmentPriceTypeResponse'  => 'Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse',
            'DoGetMyDataRequest'                       => 'Allegro_Web_Api_DoGetMyDataRequest',
            'UserDataStruct'                           => 'Allegro_Web_Api_UserDataStruct',
            'InvoiceDataStruct'                        => 'Allegro_Web_Api_InvoiceDataStruct',
            'CompanyExtraDataStruct'                   => 'Allegro_Web_Api_CompanyExtraDataStruct',
            'CompanySecondAddressStruct'               => 'Allegro_Web_Api_CompanySecondAddressStruct',
            'PharmacyDataStruct'                       => 'Allegro_Web_Api_PharmacyDataStruct',
            'AlcoholDataStruct'                        => 'Allegro_Web_Api_AlcoholDataStruct',
            'RelatedPersonsStruct'                     => 'Allegro_Web_Api_RelatedPersonsStruct',
            'doGetMyDataResponse'                      => 'Allegro_Web_Api_DoGetMyDataResponse',
            'FutureFilterOptionsStruct'                => 'Allegro_Web_Api_FutureFilterOptionsStruct',
            'DoGetMyFutureItemsRequest'                => 'Allegro_Web_Api_DoGetMyFutureItemsRequest',
            'FutureItemStruct'                         => 'Allegro_Web_Api_FutureItemStruct',
            'ArrayOfFutureitemstruct'                  => 'Allegro_Web_Api_ArrayOfFutureitemstruct',
            'doGetMyFutureItemsResponse'               => 'Allegro_Web_Api_DoGetMyFutureItemsResponse',
            'DoGetMyIncomingPaymentsRequest'           => 'Allegro_Web_Api_DoGetMyIncomingPaymentsRequest',
            'PaymentDetailsStruct'                     => 'Allegro_Web_Api_PaymentDetailsStruct',
            'ArrayOfPaymentdetailsstruct'              => 'Allegro_Web_Api_ArrayOfPaymentdetailsstruct',
            'UserIncomingPaymentStruct'                => 'Allegro_Web_Api_UserIncomingPaymentStruct',
            'ArrayOfUserincomingpaymentstruct'         => 'Allegro_Web_Api_ArrayOfUserincomingpaymentstruct',
            'doGetMyIncomingPaymentsResponse'          => 'Allegro_Web_Api_DoGetMyIncomingPaymentsResponse',
            'DoGetMyIncomingPaymentsRefundsRequest'    => 'Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsRequest',
            'UserIncomingPaymentRefundsStruct'         => 'Allegro_Web_Api_UserIncomingPaymentRefundsStruct',
            'ArrayOfUserincomingpaymentrefundsstruct'  => 'Allegro_Web_Api_ArrayOfUserincomingpaymentrefundsstruct',
            'doGetMyIncomingPaymentsRefundsResponse'   => 'Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse',
            'FilterPriceStruct'                        => 'Allegro_Web_Api_FilterPriceStruct',
            'NotSoldFilterOptionsStruct'               => 'Allegro_Web_Api_NotSoldFilterOptionsStruct',
            'DoGetMyNotSoldItemsRequest'               => 'Allegro_Web_Api_DoGetMyNotSoldItemsRequest',
            'NotSoldItemStruct'                        => 'Allegro_Web_Api_NotSoldItemStruct',
            'ArrayOfNotsolditemstruct'                 => 'Allegro_Web_Api_ArrayOfNotsolditemstruct',
            'doGetMyNotSoldItemsResponse'              => 'Allegro_Web_Api_DoGetMyNotSoldItemsResponse',
            'DoGetMyNotWonItemsRequest'                => 'Allegro_Web_Api_DoGetMyNotWonItemsRequest',
            'NotWonItemStruct'                         => 'Allegro_Web_Api_NotWonItemStruct',
            'ArrayOfNotwonitemstruct'                  => 'Allegro_Web_Api_ArrayOfNotwonitemstruct',
            'doGetMyNotWonItemsResponse'               => 'Allegro_Web_Api_DoGetMyNotWonItemsResponse',
            'DoGetMyPaymentsRequest'                   => 'Allegro_Web_Api_DoGetMyPaymentsRequest',
            'PaymentItemsStruct'                       => 'Allegro_Web_Api_PaymentItemsStruct',
            'ArrayOfPaymentitemsstruct'                => 'Allegro_Web_Api_ArrayOfPaymentitemsstruct',
            'PaymentSellersStruct'                     => 'Allegro_Web_Api_PaymentSellersStruct',
            'ArrayOfPaymentsellersstruct'              => 'Allegro_Web_Api_ArrayOfPaymentsellersstruct',
            'UserPaymentStruct'                        => 'Allegro_Web_Api_UserPaymentStruct',
            'ArrayOfUserpaymentstruct'                 => 'Allegro_Web_Api_ArrayOfUserpaymentstruct',
            'doGetMyPaymentsResponse'                  => 'Allegro_Web_Api_DoGetMyPaymentsResponse',
            'DoGetMyPaymentsInfoRequest'               => 'Allegro_Web_Api_DoGetMyPaymentsInfoRequest',
            'PaymentsUserDataStruct'                   => 'Allegro_Web_Api_PaymentsUserDataStruct',
            'PayoutAutoFrequencyStruct'                => 'Allegro_Web_Api_PayoutAutoFrequencyStruct',
            'PayoutAutoSettingsStruct'                 => 'Allegro_Web_Api_PayoutAutoSettingsStruct',
            'PaymentsPayoutStruct'                     => 'Allegro_Web_Api_PaymentsPayoutStruct',
            'PaymentsInfoStruct'                       => 'Allegro_Web_Api_PaymentsInfoStruct',
            'doGetMyPaymentsInfoResponse'              => 'Allegro_Web_Api_DoGetMyPaymentsInfoResponse',
            'DoGetMyPaymentsRefundsRequest'            => 'Allegro_Web_Api_DoGetMyPaymentsRefundsRequest',
            'UserPaymentRefundsStruct'                 => 'Allegro_Web_Api_UserPaymentRefundsStruct',
            'ArrayOfUserpaymentrefundsstruct'          => 'Allegro_Web_Api_ArrayOfUserpaymentrefundsstruct',
            'doGetMyPaymentsRefundsResponse'           => 'Allegro_Web_Api_DoGetMyPaymentsRefundsResponse',
            'DoGetMyPayoutsRequest'                    => 'Allegro_Web_Api_DoGetMyPayoutsRequest',
            'UserPayoutStruct'                         => 'Allegro_Web_Api_UserPayoutStruct',
            'ArrayOfUserpayoutstruct'                  => 'Allegro_Web_Api_ArrayOfUserpayoutstruct',
            'doGetMyPayoutsResponse'                   => 'Allegro_Web_Api_DoGetMyPayoutsResponse',
            'SellFilterOptionsStruct'                  => 'Allegro_Web_Api_SellFilterOptionsStruct',
            'DoGetMySellItemsRequest'                  => 'Allegro_Web_Api_DoGetMySellItemsRequest',
            'SellItemStruct'                           => 'Allegro_Web_Api_SellItemStruct',
            'ArrayOfSellitemstruct'                    => 'Allegro_Web_Api_ArrayOfSellitemstruct',
            'doGetMySellItemsResponse'                 => 'Allegro_Web_Api_DoGetMySellItemsResponse',
            'DoGetMySellRatingRequest'                 => 'Allegro_Web_Api_DoGetMySellRatingRequest',
            'SellRatingAverageStruct'                  => 'Allegro_Web_Api_SellRatingAverageStruct',
            'ArrayOfSellratingaveragestruct'           => 'Allegro_Web_Api_ArrayOfSellratingaveragestruct',
            'SellRatingReasonSumStruct'                => 'Allegro_Web_Api_SellRatingReasonSumStruct',
            'ArrayOfSellratingreasonsumstruct'         => 'Allegro_Web_Api_ArrayOfSellratingreasonsumstruct',
            'SellRatingDetailStruct'                   => 'Allegro_Web_Api_SellRatingDetailStruct',
            'ArrayOfSellratingdetailstruct'            => 'Allegro_Web_Api_ArrayOfSellratingdetailstruct',
            'SellRatingStatsStruct'                    => 'Allegro_Web_Api_SellRatingStatsStruct',
            'ArrayOfSellratingstatsstruct'             => 'Allegro_Web_Api_ArrayOfSellratingstatsstruct',
            'SellRatingAveragePerMonthStruct'          => 'Allegro_Web_Api_SellRatingAveragePerMonthStruct',
            'ArrayOfSellratingaveragepermonthstruct'   => 'Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct',
            'doGetMySellRatingResponse'                => 'Allegro_Web_Api_DoGetMySellRatingResponse',
            'SoldFilterOptionsStruct'                  => 'Allegro_Web_Api_SoldFilterOptionsStruct',
            'DoGetMySoldItemsRequest'                  => 'Allegro_Web_Api_DoGetMySoldItemsRequest',
            'SoldItemStruct'                           => 'Allegro_Web_Api_SoldItemStruct',
            'ArrayOfSolditemstruct'                    => 'Allegro_Web_Api_ArrayOfSolditemstruct',
            'doGetMySoldItemsResponse'                 => 'Allegro_Web_Api_DoGetMySoldItemsResponse',
            'DoGetMyWatchItemsRequest'                 => 'Allegro_Web_Api_DoGetMyWatchItemsRequest',
            'ItemReminderStruct'                       => 'Allegro_Web_Api_ItemReminderStruct',
            'ArrayOfItemreminderstruct'                => 'Allegro_Web_Api_ArrayOfItemreminderstruct',
            'WatchItemStruct'                          => 'Allegro_Web_Api_WatchItemStruct',
            'ArrayOfWatchitemstruct'                   => 'Allegro_Web_Api_ArrayOfWatchitemstruct',
            'doGetMyWatchItemsResponse'                => 'Allegro_Web_Api_DoGetMyWatchItemsResponse',
            'DoGetMyWatchedItemsRequest'               => 'Allegro_Web_Api_DoGetMyWatchedItemsRequest',
            'WatchedItemStruct'                        => 'Allegro_Web_Api_WatchedItemStruct',
            'ArrayOfWatcheditemstruct'                 => 'Allegro_Web_Api_ArrayOfWatcheditemstruct',
            'doGetMyWatchedItemsResponse'              => 'Allegro_Web_Api_DoGetMyWatchedItemsResponse',
            'DoGetMyWonItemsRequest'                   => 'Allegro_Web_Api_DoGetMyWonItemsRequest',
            'WonItemStruct'                            => 'Allegro_Web_Api_WonItemStruct',
            'ArrayOfWonitemstruct'                     => 'Allegro_Web_Api_ArrayOfWonitemstruct',
            'doGetMyWonItemsResponse'                  => 'Allegro_Web_Api_DoGetMyWonItemsResponse',
            'DoGetPaymentDataRequest'                  => 'Allegro_Web_Api_DoGetPaymentDataRequest',
            'BillingDataType'                          => 'Allegro_Web_Api_BillingDataType',
            'ArrayOfBillingdatatype'                   => 'Allegro_Web_Api_ArrayOfBillingdatatype',
            'doGetPaymentDataResponse'                 => 'Allegro_Web_Api_DoGetPaymentDataResponse',
            'DoGetPaymentMethodsRequest'               => 'Allegro_Web_Api_DoGetPaymentMethodsRequest',
            'PaymentMethodStruct'                      => 'Allegro_Web_Api_PaymentMethodStruct',
            'ArrayOfPaymentmethodstruct'               => 'Allegro_Web_Api_ArrayOfPaymentmethodstruct',
            'doGetPaymentMethodsResponse'              => 'Allegro_Web_Api_DoGetPaymentMethodsResponse',
            'DoGetPostBuyDataRequest'                  => 'Allegro_Web_Api_DoGetPostBuyDataRequest',
            'UserSentToDataStruct'                     => 'Allegro_Web_Api_UserSentToDataStruct',
            'UserPostBuyDataStruct'                    => 'Allegro_Web_Api_UserPostBuyDataStruct',
            'ArrayOfUserpostbuydatastruct'             => 'Allegro_Web_Api_ArrayOfUserpostbuydatastruct',
            'ItemPostBuyDataStruct'                    => 'Allegro_Web_Api_ItemPostBuyDataStruct',
            'ArrayOfItempostbuydatastruct'             => 'Allegro_Web_Api_ArrayOfItempostbuydatastruct',
            'doGetPostBuyDataResponse'                 => 'Allegro_Web_Api_DoGetPostBuyDataResponse',
            'DoGetPostBuyFormsDataForBuyersRequest'    => 'Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersRequest',
            'PostBuyFormItemDealsStruct'               => 'Allegro_Web_Api_PostBuyFormItemDealsStruct',
            'ArrayOfPostbuyformitemdealsstruct'        => 'Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct',
            'PostBuyFormItemStruct'                    => 'Allegro_Web_Api_PostBuyFormItemStruct',
            'ArrayOfPostbuyformitemstruct'             => 'Allegro_Web_Api_ArrayOfPostbuyformitemstruct',
            'PostBuyFormShipmentTrackingStruct'        => 'Allegro_Web_Api_PostBuyFormShipmentTrackingStruct',
            'ArrayOfPostbuyformshipmenttrackingstruct' => 'Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct',
            'PostBuyFormAddressStruct'                 => 'Allegro_Web_Api_PostBuyFormAddressStruct',
            'PostBuyFormSellersStruct'                 => 'Allegro_Web_Api_PostBuyFormSellersStruct',
            'ArrayOfPostbuyformsellersstruct'          => 'Allegro_Web_Api_ArrayOfPostbuyformsellersstruct',
            'PostBuyFormForBuyersDataStruct'           => 'Allegro_Web_Api_PostBuyFormForBuyersDataStruct',
            'ArrayOfPostbuyformforbuyersdatastruct'    => 'Allegro_Web_Api_ArrayOfPostbuyformforbuyersdatastruct',
            'doGetPostBuyFormsDataForBuyersResponse'   => 'Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse',
            'DoGetPostBuyFormsDataForSellersRequest'   => 'Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest',
            'PostBuyFormDataStruct'                    => 'Allegro_Web_Api_PostBuyFormDataStruct',
            'ArrayOfPostbuyformdatastruct'             => 'Allegro_Web_Api_ArrayOfPostbuyformdatastruct',
            'doGetPostBuyFormsDataForSellersResponse'  => 'Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse',
            'DoGetPostBuyFormsIdsRequest'              => 'Allegro_Web_Api_DoGetPostBuyFormsIdsRequest',
            'doGetPostBuyFormsIdsResponse'             => 'Allegro_Web_Api_DoGetPostBuyFormsIdsResponse',
            'DoGetPostBuyItemInfoRequest'              => 'Allegro_Web_Api_DoGetPostBuyItemInfoRequest',
            'PostBuyItemInfoStruct'                    => 'Allegro_Web_Api_PostBuyItemInfoStruct',
            'ArrayOfPostbuyiteminfostruct'             => 'Allegro_Web_Api_ArrayOfPostbuyiteminfostruct',
            'doGetPostBuyItemInfoResponse'             => 'Allegro_Web_Api_DoGetPostBuyItemInfoResponse',
            'DoGetRefundsDealsRequest'                 => 'Allegro_Web_Api_DoGetRefundsDealsRequest',
            'RefundsDealsListType'                     => 'Allegro_Web_Api_RefundsDealsListType',
            'ArrayOfRefundsdealslisttype'              => 'Allegro_Web_Api_ArrayOfRefundsdealslisttype',
            'doGetRefundsDealsResponse'                => 'Allegro_Web_Api_DoGetRefundsDealsResponse',
            'DoGetRefundsListRequest'                  => 'Allegro_Web_Api_DoGetRefundsListRequest',
            'RefundDetailsType'                        => 'Allegro_Web_Api_RefundDetailsType',
            'RefundListType'                           => 'Allegro_Web_Api_RefundListType',
            'ArrayOfRefundlisttype'                    => 'Allegro_Web_Api_ArrayOfRefundlisttype',
            'doGetRefundsListResponse'                 => 'Allegro_Web_Api_DoGetRefundsListResponse',
            'DoGetRefundsReasonsRequest'               => 'Allegro_Web_Api_DoGetRefundsReasonsRequest',
            'ReasonInfoType'                           => 'Allegro_Web_Api_ReasonInfoType',
            'ArrayOfReasoninfotype'                    => 'Allegro_Web_Api_ArrayOfReasoninfotype',
            'doGetRefundsReasonsResponse'              => 'Allegro_Web_Api_DoGetRefundsReasonsResponse',
            'DoGetRelatedItemsRequest'                 => 'Allegro_Web_Api_DoGetRelatedItemsRequest',
            'RelatedItemStruct'                        => 'Allegro_Web_Api_RelatedItemStruct',
            'ArrayOfRelateditemstruct'                 => 'Allegro_Web_Api_ArrayOfRelateditemstruct',
            'RelatedItemsStruct'                       => 'Allegro_Web_Api_RelatedItemsStruct',
            'doGetRelatedItemsResponse'                => 'Allegro_Web_Api_DoGetRelatedItemsResponse',
            'DoGetSellFormAttribsRequest'              => 'Allegro_Web_Api_DoGetSellFormAttribsRequest',
            'SellFormType'                             => 'Allegro_Web_Api_SellFormType',
            'ArrayOfSellformtype'                      => 'Allegro_Web_Api_ArrayOfSellformtype',
            'doGetSellFormAttribsResponse'             => 'Allegro_Web_Api_DoGetSellFormAttribsResponse',
            'DoGetSellFormFieldsRequest'               => 'Allegro_Web_Api_DoGetSellFormFieldsRequest',
            'doGetSellFormFieldsResponse'              => 'Allegro_Web_Api_DoGetSellFormFieldsResponse',
            'DoGetSellFormFieldsExtRequest'            => 'Allegro_Web_Api_DoGetSellFormFieldsExtRequest',
            'doGetSellFormFieldsExtResponse'           => 'Allegro_Web_Api_DoGetSellFormFieldsExtResponse',
            'DoGetSellFormFieldsExtLimitRequest'       => 'Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest',
            'doGetSellFormFieldsExtLimitResponse'      => 'Allegro_Web_Api_DoGetSellFormFieldsExtLimitResponse',
            'DoGetSellFormFieldsForCategoryRequest'    => 'Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest',
            'SellFormFieldsForCategoryStruct'          => 'Allegro_Web_Api_SellFormFieldsForCategoryStruct',
            'doGetSellFormFieldsForCategoryResponse'   => 'Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse',
            'DoGetSellFormFieldsLimitRequest'          => 'Allegro_Web_Api_DoGetSellFormFieldsLimitRequest',
            'doGetSellFormFieldsLimitResponse'         => 'Allegro_Web_Api_DoGetSellFormFieldsLimitResponse',
            'DoGetSellRatingReasonsRequest'            => 'Allegro_Web_Api_DoGetSellRatingReasonsRequest',
            'SellRatingReasonStruct'                   => 'Allegro_Web_Api_SellRatingReasonStruct',
            'ArrayOfSellratingreasonstruct'            => 'Allegro_Web_Api_ArrayOfSellratingreasonstruct',
            'SellRatingInfoStruct'                     => 'Allegro_Web_Api_SellRatingInfoStruct',
            'ArrayOfSellratinginfostruct'              => 'Allegro_Web_Api_ArrayOfSellratinginfostruct',
            'doGetSellRatingReasonsResponse'           => 'Allegro_Web_Api_DoGetSellRatingReasonsResponse',
            'DoGetServiceInfoRequest'                  => 'Allegro_Web_Api_DoGetServiceInfoRequest',
            'ServiceInfoStruct'                        => 'Allegro_Web_Api_ServiceInfoStruct',
            'ArrayOfServiceinfostruct'                 => 'Allegro_Web_Api_ArrayOfServiceinfostruct',
            'doGetServiceInfoResponse'                 => 'Allegro_Web_Api_DoGetServiceInfoResponse',
            'DoGetServiceInfoCategoriesRequest'        => 'Allegro_Web_Api_DoGetServiceInfoCategoriesRequest',
            'ServiceInfoCatStruct'                     => 'Allegro_Web_Api_ServiceInfoCatStruct',
            'ArrayOfServiceinfocatstruct'              => 'Allegro_Web_Api_ArrayOfServiceinfocatstruct',
            'doGetServiceInfoCategoriesResponse'       => 'Allegro_Web_Api_DoGetServiceInfoCategoriesResponse',
            'DoGetServiceTemplatesRequest'             => 'Allegro_Web_Api_DoGetServiceTemplatesRequest',
            'TemplateInfoType'                         => 'Allegro_Web_Api_TemplateInfoType',
            'ArrayOfTemplateinfotype'                  => 'Allegro_Web_Api_ArrayOfTemplateinfotype',
            'doGetServiceTemplatesResponse'            => 'Allegro_Web_Api_DoGetServiceTemplatesResponse',
            'DoGetSessionHandleForWidgetRequest'       => 'Allegro_Web_Api_DoGetSessionHandleForWidgetRequest',
            'doGetSessionHandleForWidgetResponse'      => 'Allegro_Web_Api_DoGetSessionHandleForWidgetResponse',
            'DoGetShipmentDataRequest'                 => 'Allegro_Web_Api_DoGetShipmentDataRequest',
            'ShipmentTimeStruct'                       => 'Allegro_Web_Api_ShipmentTimeStruct',
            'ShipmentDataStruct'                       => 'Allegro_Web_Api_ShipmentDataStruct',
            'ArrayOfShipmentdatastruct'                => 'Allegro_Web_Api_ArrayOfShipmentdatastruct',
            'doGetShipmentDataResponse'                => 'Allegro_Web_Api_DoGetShipmentDataResponse',
            'DoGetShipmentDataForRelatedItemsRequest'  => 'Allegro_Web_Api_DoGetShipmentDataForRelatedItemsRequest',
            'ShipmentPaymentInfoStruct'                => 'Allegro_Web_Api_ShipmentPaymentInfoStruct',
            'ArrayOfShipmentpaymentinfostruct'         => 'Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct',
            'SellerPaymentInfoStruct'                  => 'Allegro_Web_Api_SellerPaymentInfoStruct',
            'SellerShipmentDataStruct'                 => 'Allegro_Web_Api_SellerShipmentDataStruct',
            'ArrayOfSellershipmentdatastruct'          => 'Allegro_Web_Api_ArrayOfSellershipmentdatastruct',
            'RelatedItemsShipmentDataStruct'           => 'Allegro_Web_Api_RelatedItemsShipmentDataStruct',
            'doGetShipmentDataForRelatedItemsResponse' => 'Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse',
            'DoGetShipmentPriceTypesRequest'           => 'Allegro_Web_Api_DoGetShipmentPriceTypesRequest',
            'ShipmentPriceTypeStruct'                  => 'Allegro_Web_Api_ShipmentPriceTypeStruct',
            'ArrayOfShipmentpricetypestruct'           => 'Allegro_Web_Api_ArrayOfShipmentpricetypestruct',
            'doGetShipmentPriceTypesResponse'          => 'Allegro_Web_Api_DoGetShipmentPriceTypesResponse',
            'DoGetShopCatsDataRequest'                 => 'Allegro_Web_Api_DoGetShopCatsDataRequest',
            'doGetShopCatsDataResponse'                => 'Allegro_Web_Api_DoGetShopCatsDataResponse',
            'DoGetShopsTagsRequest'                    => 'Allegro_Web_Api_DoGetShopsTagsRequest',
            'ShopsTagTypeStruct'                       => 'Allegro_Web_Api_ShopsTagTypeStruct',
            'ArrayOfShopstagtypestruct'                => 'Allegro_Web_Api_ArrayOfShopstagtypestruct',
            'doGetShopsTagsResponse'                   => 'Allegro_Web_Api_DoGetShopsTagsResponse',
            'DoGetSiteJournalRequest'                  => 'Allegro_Web_Api_DoGetSiteJournalRequest',
            'SiteJournal'                              => 'Allegro_Web_Api_SiteJournal',
            'ArrayOfSitejournal'                       => 'Allegro_Web_Api_ArrayOfSitejournal',
            'doGetSiteJournalResponse'                 => 'Allegro_Web_Api_DoGetSiteJournalResponse',
            'DoGetSiteJournalDealsRequest'             => 'Allegro_Web_Api_DoGetSiteJournalDealsRequest',
            'SiteJournalDealsStruct'                   => 'Allegro_Web_Api_SiteJournalDealsStruct',
            'ArrayOfSitejournaldealsstruct'            => 'Allegro_Web_Api_ArrayOfSitejournaldealsstruct',
            'doGetSiteJournalDealsResponse'            => 'Allegro_Web_Api_DoGetSiteJournalDealsResponse',
            'DoGetSiteJournalDealsInfoRequest'         => 'Allegro_Web_Api_DoGetSiteJournalDealsInfoRequest',
            'SiteJournalDealsInfoStruct'               => 'Allegro_Web_Api_SiteJournalDealsInfoStruct',
            'doGetSiteJournalDealsInfoResponse'        => 'Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse',
            'DoGetSiteJournalInfoRequest'              => 'Allegro_Web_Api_DoGetSiteJournalInfoRequest',
            'SiteJournalInfo'                          => 'Allegro_Web_Api_SiteJournalInfo',
            'doGetSiteJournalInfoResponse'             => 'Allegro_Web_Api_DoGetSiteJournalInfoResponse',
            'DoGetSitesFlagInfoRequest'                => 'Allegro_Web_Api_DoGetSitesFlagInfoRequest',
            'SiteFlagInfoType'                         => 'Allegro_Web_Api_SiteFlagInfoType',
            'ArrayOfSiteflaginfotype'                  => 'Allegro_Web_Api_ArrayOfSiteflaginfotype',
            'doGetSitesFlagInfoResponse'               => 'Allegro_Web_Api_DoGetSitesFlagInfoResponse',
            'DoGetSitesInfoRequest'                    => 'Allegro_Web_Api_DoGetSitesInfoRequest',
            'SiteInfoType'                             => 'Allegro_Web_Api_SiteInfoType',
            'ArrayOfSiteinfotype'                      => 'Allegro_Web_Api_ArrayOfSiteinfotype',
            'doGetSitesInfoResponse'                   => 'Allegro_Web_Api_DoGetSitesInfoResponse',
            'DoGetSpecialItemsRequest'                 => 'Allegro_Web_Api_DoGetSpecialItemsRequest',
            'SpecialAuctionStruct'                     => 'Allegro_Web_Api_SpecialAuctionStruct',
            'ArrayOfSpecialauctionstruct'              => 'Allegro_Web_Api_ArrayOfSpecialauctionstruct',
            'doGetSpecialItemsResponse'                => 'Allegro_Web_Api_DoGetSpecialItemsResponse',
            'DoGetStatesInfoRequest'                   => 'Allegro_Web_Api_DoGetStatesInfoRequest',
            'StateInfoStruct'                          => 'Allegro_Web_Api_StateInfoStruct',
            'ArrayOfStateinfostruct'                   => 'Allegro_Web_Api_ArrayOfStateinfostruct',
            'doGetStatesInfoResponse'                  => 'Allegro_Web_Api_DoGetStatesInfoResponse',
            'DoGetSystemTimeRequest'                   => 'Allegro_Web_Api_DoGetSystemTimeRequest',
            'doGetSystemTimeResponse'                  => 'Allegro_Web_Api_DoGetSystemTimeResponse',
            'DoGetTransactionsIDsRequest'              => 'Allegro_Web_Api_DoGetTransactionsIDsRequest',
            'doGetTransactionsIDsResponse'             => 'Allegro_Web_Api_DoGetTransactionsIDsResponse',
            'DoGetUserIDRequest'                       => 'Allegro_Web_Api_DoGetUserIDRequest',
            'doGetUserIDResponse'                      => 'Allegro_Web_Api_DoGetUserIDResponse',
            'DoGetUserItemsRequest'                    => 'Allegro_Web_Api_DoGetUserItemsRequest',
            'UserItemList'                             => 'Allegro_Web_Api_UserItemList',
            'ArrayOfUseritemlist'                      => 'Allegro_Web_Api_ArrayOfUseritemlist',
            'doGetUserItemsResponse'                   => 'Allegro_Web_Api_DoGetUserItemsResponse',
            'DoGetUserLicenceDateRequest'              => 'Allegro_Web_Api_DoGetUserLicenceDateRequest',
            'doGetUserLicenceDateResponse'             => 'Allegro_Web_Api_DoGetUserLicenceDateResponse',
            'DoGetUserLoginRequest'                    => 'Allegro_Web_Api_DoGetUserLoginRequest',
            'doGetUserLoginResponse'                   => 'Allegro_Web_Api_DoGetUserLoginResponse',
            'DoGetWaitingFeedbacksRequest'             => 'Allegro_Web_Api_DoGetWaitingFeedbacksRequest',
            'WaitFeedbackStruct'                       => 'Allegro_Web_Api_WaitFeedbackStruct',
            'ArrayOfWaitfeedbackstruct'                => 'Allegro_Web_Api_ArrayOfWaitfeedbackstruct',
            'doGetWaitingFeedbacksResponse'            => 'Allegro_Web_Api_DoGetWaitingFeedbacksResponse',
            'DoGetWaitingFeedbacksCountRequest'        => 'Allegro_Web_Api_DoGetWaitingFeedbacksCountRequest',
            'doGetWaitingFeedbacksCountResponse'       => 'Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse',
            'DoInternalIStoreChangeRequest'            => 'Allegro_Web_Api_DoInternalIStoreChangeRequest',
            'doInternalIStoreChangeResponse'           => 'Allegro_Web_Api_DoInternalIStoreChangeResponse',
            'DoLoginRequest'                           => 'Allegro_Web_Api_DoLoginRequest',
            'doLoginResponse'                          => 'Allegro_Web_Api_DoLoginResponse',
            'DoLoginEncRequest'                        => 'Allegro_Web_Api_DoLoginEncRequest',
            'doLoginEncResponse'                       => 'Allegro_Web_Api_DoLoginEncResponse',
            'DoLoginWithAccessTokenRequest'            => 'Allegro_Web_Api_DoLoginWithAccessTokenRequest',
            'doLoginWithAccessTokenResponse'           => 'Allegro_Web_Api_DoLoginWithAccessTokenResponse',
            'DoMyAccount2Request'                      => 'Allegro_Web_Api_DoMyAccount2Request',
            'MyAccountStruct2'                         => 'Allegro_Web_Api_MyAccountStruct2',
            'ArrayOfMyaccountstruct2'                  => 'Allegro_Web_Api_ArrayOfMyaccountstruct2',
            'doMyAccount2Response'                     => 'Allegro_Web_Api_DoMyAccount2Response',
            'DoMyAccountItemsCountRequest'             => 'Allegro_Web_Api_DoMyAccountItemsCountRequest',
            'doMyAccountItemsCountResponse'            => 'Allegro_Web_Api_DoMyAccountItemsCountResponse',
            'DoMyBillingRequest'                       => 'Allegro_Web_Api_DoMyBillingRequest',
            'doMyBillingResponse'                      => 'Allegro_Web_Api_DoMyBillingResponse',
            'DoMyBillingItemRequest'                   => 'Allegro_Web_Api_DoMyBillingItemRequest',
            'ItemBilling'                              => 'Allegro_Web_Api_ItemBilling',
            'ArrayOfItembilling'                       => 'Allegro_Web_Api_ArrayOfItembilling',
            'doMyBillingItemResponse'                  => 'Allegro_Web_Api_DoMyBillingItemResponse',
            'DoMyContactRequest'                       => 'Allegro_Web_Api_DoMyContactRequest',
            'MyContactList'                            => 'Allegro_Web_Api_MyContactList',
            'ArrayOfMycontactlist'                     => 'Allegro_Web_Api_ArrayOfMycontactlist',
            'doMyContactResponse'                      => 'Allegro_Web_Api_DoMyContactResponse',
            'DoMyFeedback2Request'                     => 'Allegro_Web_Api_DoMyFeedback2Request',
            'MyFeedbackListStruct2'                    => 'Allegro_Web_Api_MyFeedbackListStruct2',
            'ArrayOfMyfeedbackliststruct2'             => 'Allegro_Web_Api_ArrayOfMyfeedbackliststruct2',
            'doMyFeedback2Response'                    => 'Allegro_Web_Api_DoMyFeedback2Response',
            'DoMyFeedback2LimitRequest'                => 'Allegro_Web_Api_DoMyFeedback2LimitRequest',
            'doMyFeedback2LimitResponse'               => 'Allegro_Web_Api_DoMyFeedback2LimitResponse',
            'ItemTemplateCreateStruct'                 => 'Allegro_Web_Api_ItemTemplateCreateStruct',
            'TagNameStruct'                            => 'Allegro_Web_Api_TagNameStruct',
            'ArrayOfTagnamestruct'                     => 'Allegro_Web_Api_ArrayOfTagnamestruct',
            'DoNewAuctionExtRequest'                   => 'Allegro_Web_Api_DoNewAuctionExtRequest',
            'doNewAuctionExtResponse'                  => 'Allegro_Web_Api_DoNewAuctionExtResponse',
            'DoQueryAllSysStatusRequest'               => 'Allegro_Web_Api_DoQueryAllSysStatusRequest',
            'SysStatusType'                            => 'Allegro_Web_Api_SysStatusType',
            'ArrayOfSysstatustype'                     => 'Allegro_Web_Api_ArrayOfSysstatustype',
            'doQueryAllSysStatusResponse'              => 'Allegro_Web_Api_DoQueryAllSysStatusResponse',
            'DoQuerySysStatusRequest'                  => 'Allegro_Web_Api_DoQuerySysStatusRequest',
            'doQuerySysStatusResponse'                 => 'Allegro_Web_Api_DoQuerySysStatusResponse',
            'DoRemoveFromBlackListRequest'             => 'Allegro_Web_Api_DoRemoveFromBlackListRequest',
            'BlackListResStruct'                       => 'Allegro_Web_Api_BlackListResStruct',
            'ArrayOfBlacklistresstruct'                => 'Allegro_Web_Api_ArrayOfBlacklistresstruct',
            'doRemoveFromBlackListResponse'            => 'Allegro_Web_Api_DoRemoveFromBlackListResponse',
            'DoRemoveFromWatchListRequest'             => 'Allegro_Web_Api_DoRemoveFromWatchListRequest',
            'ItemRemoveWatchStruct'                    => 'Allegro_Web_Api_ItemRemoveWatchStruct',
            'ArrayOfItemremovewatchstruct'             => 'Allegro_Web_Api_ArrayOfItemremovewatchstruct',
            'doRemoveFromWatchListResponse'            => 'Allegro_Web_Api_DoRemoveFromWatchListResponse',
            'DoRemoveItemTemplatesRequest'             => 'Allegro_Web_Api_DoRemoveItemTemplatesRequest',
            'RemovedItemTemplatesStruct'               => 'Allegro_Web_Api_RemovedItemTemplatesStruct',
            'doRemoveItemTemplatesResponse'            => 'Allegro_Web_Api_DoRemoveItemTemplatesResponse',
            'DoRequestCancelBidRequest'                => 'Allegro_Web_Api_DoRequestCancelBidRequest',
            'doRequestCancelBidResponse'               => 'Allegro_Web_Api_DoRequestCancelBidResponse',
            'DoRequestPayoutRequest'                   => 'Allegro_Web_Api_DoRequestPayoutRequest',
            'RequestPayoutStruct'                      => 'Allegro_Web_Api_RequestPayoutStruct',
            'doRequestPayoutResponse'                  => 'Allegro_Web_Api_DoRequestPayoutResponse',
            'DoRequestSurchargeRequest'                => 'Allegro_Web_Api_DoRequestSurchargeRequest',
            'doRequestSurchargeResponse'               => 'Allegro_Web_Api_DoRequestSurchargeResponse',
            'SearchOptType'                            => 'Allegro_Web_Api_SearchOptType',
            'DoSearchRequest'                          => 'Allegro_Web_Api_DoSearchRequest',
            'AdvertInfoStruct'                         => 'Allegro_Web_Api_AdvertInfoStruct',
            'SellerInfoStruct'                         => 'Allegro_Web_Api_SellerInfoStruct',
            'SearchResponseType'                       => 'Allegro_Web_Api_SearchResponseType',
            'ArrayOfSearchresponsetype'                => 'Allegro_Web_Api_ArrayOfSearchresponsetype',
            'CategoriesStruct'                         => 'Allegro_Web_Api_CategoriesStruct',
            'ArrayOfCategoriesstruct'                  => 'Allegro_Web_Api_ArrayOfCategoriesstruct',
            'doSearchResponse'                         => 'Allegro_Web_Api_DoSearchResponse',
            'DoSellSomeAgainRequest'                   => 'Allegro_Web_Api_DoSellSomeAgainRequest',
            'StructSellAgain'                          => 'Allegro_Web_Api_StructSellAgain',
            'ArrayOfStructsellagain'                   => 'Allegro_Web_Api_ArrayOfStructsellagain',
            'StructSellFailed'                         => 'Allegro_Web_Api_StructSellFailed',
            'ArrayOfStructsellfailed'                  => 'Allegro_Web_Api_ArrayOfStructsellfailed',
            'doSellSomeAgainResponse'                  => 'Allegro_Web_Api_DoSellSomeAgainResponse',
            'DoSellSomeAgainInShopRequest'             => 'Allegro_Web_Api_DoSellSomeAgainInShopRequest',
            'doSellSomeAgainInShopResponse'            => 'Allegro_Web_Api_DoSellSomeAgainInShopResponse',
            'DoSendEmailToUserRequest'                 => 'Allegro_Web_Api_DoSendEmailToUserRequest',
            'doSendEmailToUserResponse'                => 'Allegro_Web_Api_DoSendEmailToUserResponse',
            'NewPostBuyFormSellerStruct'               => 'Allegro_Web_Api_NewPostBuyFormSellerStruct',
            'ArrayOfNewpostbuyformsellerstruct'        => 'Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct',
            'InvoiceInfoStruct'                        => 'Allegro_Web_Api_InvoiceInfoStruct',
            'NewPostBuyFormCommonStruct'               => 'Allegro_Web_Api_NewPostBuyFormCommonStruct',
            'DoSendPostBuyFormRequest'                 => 'Allegro_Web_Api_DoSendPostBuyFormRequest',
            'ActionDataStruct'                         => 'Allegro_Web_Api_ActionDataStruct',
            'ArrayOfActiondatastruct'                  => 'Allegro_Web_Api_ArrayOfActiondatastruct',
            'TransactionPayByLinkStruct'               => 'Allegro_Web_Api_TransactionPayByLinkStruct',
            'PostBuyFormStruct'                        => 'Allegro_Web_Api_PostBuyFormStruct',
            'doSendPostBuyFormResponse'                => 'Allegro_Web_Api_DoSendPostBuyFormResponse',
            'DoSendRefundFormRequest'                  => 'Allegro_Web_Api_DoSendRefundFormRequest',
            'doSendRefundFormResponse'                 => 'Allegro_Web_Api_DoSendRefundFormResponse',
            'DoSetFreeDeliveryAmountRequest'           => 'Allegro_Web_Api_DoSetFreeDeliveryAmountRequest',
            'doSetFreeDeliveryAmountResponse'          => 'Allegro_Web_Api_DoSetFreeDeliveryAmountResponse',
            'DoSetShipmentPriceTypeRequest'            => 'Allegro_Web_Api_DoSetShipmentPriceTypeRequest',
            'doSetShipmentPriceTypeResponse'           => 'Allegro_Web_Api_DoSetShipmentPriceTypeResponse',
            'DoSetUserLicenceDateRequest'              => 'Allegro_Web_Api_DoSetUserLicenceDateRequest',
            'doSetUserLicenceDateResponse'             => 'Allegro_Web_Api_DoSetUserLicenceDateResponse',
            'DurationTimeInfo'                         => 'Allegro_Web_Api_DurationTimeInfo',
            'PriceCatInfo'                             => 'Allegro_Web_Api_PriceCatInfo',
            'DoShowCatRequest'                         => 'Allegro_Web_Api_DoShowCatRequest',
            'InfoCatList'                              => 'Allegro_Web_Api_InfoCatList',
            'ArrayOfInfocatlist'                       => 'Allegro_Web_Api_ArrayOfInfocatlist',
            'doShowCatResponse'                        => 'Allegro_Web_Api_DoShowCatResponse',
            'DoShowItemInfoExtRequest'                 => 'Allegro_Web_Api_DoShowItemInfoExtRequest',
            'ItemInfoExt'                              => 'Allegro_Web_Api_ItemInfoExt',
            'ItemVariantAttributeStruct'               => 'Allegro_Web_Api_ItemVariantAttributeStruct',
            'ArrayOfItemvariantattributestruct'        => 'Allegro_Web_Api_ArrayOfItemvariantattributestruct',
            'ItemVariantStruct'                        => 'Allegro_Web_Api_ItemVariantStruct',
            'ArrayOfItemvariantstruct'                 => 'Allegro_Web_Api_ArrayOfItemvariantstruct',
            'doShowItemInfoExtResponse'                => 'Allegro_Web_Api_DoShowItemInfoExtResponse',
            'DoShowUserRequest'                        => 'Allegro_Web_Api_DoShowUserRequest',
            'ShowUserFeedbacks'                        => 'Allegro_Web_Api_ShowUserFeedbacks',
            'doShowUserResponse'                       => 'Allegro_Web_Api_DoShowUserResponse',
            'DoShowUserPageRequest'                    => 'Allegro_Web_Api_DoShowUserPageRequest',
            'doShowUserPageResponse'                   => 'Allegro_Web_Api_DoShowUserPageResponse',
            'DoVerifyItemRequest'                      => 'Allegro_Web_Api_DoVerifyItemRequest',
            'doVerifyItemResponse'                     => 'Allegro_Web_Api_DoVerifyItemResponse'
        )
    );

    /**
     * @param array  $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl, array $options = array())
    {
        $options = array_merge($this->_defaultOptions, $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param Allegro_Web_Api_DoAddDescToItemsRequest $parameters
     * @return Allegro_Web_Api_DoAddDescToItemsResponse
     */
    public function doAddDescToItems(Allegro_Web_Api_DoAddDescToItemsRequest $parameters)
    {
        return $this->__soapCall('doAddDescToItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest $parameters
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest $parameters)
    {
        return $this->__soapCall('doAddPackageInfoToPostBuyForm', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoAddToBlackListRequest $parameters
     * @return Allegro_Web_Api_DoAddToBlackListResponse
     */
    public function doAddToBlackList(Allegro_Web_Api_DoAddToBlackListRequest $parameters)
    {
        return $this->__soapCall('doAddToBlackList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoAddToWatchListRequest $parameters
     * @return Allegro_Web_Api_DoAddToWatchListResponse
     */
    public function doAddToWatchList(Allegro_Web_Api_DoAddToWatchListRequest $parameters)
    {
        return $this->__soapCall('doAddToWatchList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoBidItemRequest $parameters
     * @return Allegro_Web_Api_DoBidItemResponse
     */
    public function doBidItem(Allegro_Web_Api_DoBidItemRequest $parameters)
    {
        return $this->__soapCall('doBidItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCancelBidItemRequest $parameters
     * @return Allegro_Web_Api_DoCancelBidItemResponse
     */
    public function doCancelBidItem(Allegro_Web_Api_DoCancelBidItemRequest $parameters)
    {
        return $this->__soapCall('doCancelBidItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCancelRefundFormRequest $parameters
     * @return Allegro_Web_Api_DoCancelRefundFormResponse
     */
    public function doCancelRefundForm(Allegro_Web_Api_DoCancelRefundFormRequest $parameters)
    {
        return $this->__soapCall('doCancelRefundForm', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCancelRefundWarningRequest $parameters
     * @return Allegro_Web_Api_DoCancelRefundWarningResponse
     */
    public function doCancelRefundWarning(Allegro_Web_Api_DoCancelRefundWarningRequest $parameters)
    {
        return $this->__soapCall('doCancelRefundWarning', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCancelTransactionRequest $parameters
     * @return Allegro_Web_Api_DoCancelTransactionResponse
     */
    public function doCancelTransaction(Allegro_Web_Api_DoCancelTransactionRequest $parameters)
    {
        return $this->__soapCall('doCancelTransaction', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoChangeItemFieldsRequest $parameters
     * @return Allegro_Web_Api_DoChangeItemFieldsResponse
     */
    public function doChangeItemFields(Allegro_Web_Api_DoChangeItemFieldsRequest $parameters)
    {
        return $this->__soapCall('doChangeItemFields', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoChangePriceItemRequest $parameters
     * @return Allegro_Web_Api_DoChangePriceItemResponse
     */
    public function doChangePriceItem(Allegro_Web_Api_DoChangePriceItemRequest $parameters)
    {
        return $this->__soapCall('doChangePriceItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoChangeQuantityItemRequest $parameters
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(Allegro_Web_Api_DoChangeQuantityItemRequest $parameters)
    {
        return $this->__soapCall('doChangeQuantityItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCheckItemDescriptionRequest $parameters
     * @return Allegro_Web_Api_DoCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(Allegro_Web_Api_DoCheckItemDescriptionRequest $parameters)
    {
        return $this->__soapCall('doCheckItemDescription', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCheckNewAuctionExtRequest $parameters
     * @return Allegro_Web_Api_DoCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(Allegro_Web_Api_DoCheckNewAuctionExtRequest $parameters)
    {
        return $this->__soapCall('doCheckNewAuctionExt', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoCreateItemTemplateRequest $parameters
     * @return Allegro_Web_Api_DoCreateItemTemplateResponse
     */
    public function doCreateItemTemplate(Allegro_Web_Api_DoCreateItemTemplateRequest $parameters)
    {
        return $this->__soapCall('doCreateItemTemplate', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoFeedbackRequest $parameters
     * @return Allegro_Web_Api_DoFeedbackResponse
     */
    public function doFeedback(Allegro_Web_Api_DoFeedbackRequest $parameters)
    {
        return $this->__soapCall('doFeedback', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoFeedbackManyRequest $parameters
     * @return Allegro_Web_Api_DoFeedbackManyResponse
     */
    public function doFeedbackMany(Allegro_Web_Api_DoFeedbackManyRequest $parameters)
    {
        return $this->__soapCall('doFeedbackMany', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoFinishItemRequest $parameters
     * @return Allegro_Web_Api_DoFinishItemResponse
     */
    public function doFinishItem(Allegro_Web_Api_DoFinishItemRequest $parameters)
    {
        return $this->__soapCall('doFinishItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoFinishItemsRequest $parameters
     * @return Allegro_Web_Api_DoFinishItemsResponse
     */
    public function doFinishItems(Allegro_Web_Api_DoFinishItemsRequest $parameters)
    {
        return $this->__soapCall('doFinishItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetAdminUserLicenceDateRequest $parameters
     * @return Allegro_Web_Api_DoGetAdminUserLicenceDateResponse
     */
    public function DoGetAdminUserLicenceDate(Allegro_Web_Api_DoGetAdminUserLicenceDateRequest $parameters)
    {
        return $this->__soapCall('DoGetAdminUserLicenceDate', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetArchiveRefundsListRequest $parameters
     * @return Allegro_Web_Api_DoGetArchiveRefundsListResponse
     */
    public function DoGetArchiveRefundsList(Allegro_Web_Api_DoGetArchiveRefundsListRequest $parameters)
    {
        return $this->__soapCall('DoGetArchiveRefundsList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetBidItem2Request $parameters
     * @return Allegro_Web_Api_DoGetBidItem2Response
     */
    public function DoGetBidItem2(Allegro_Web_Api_DoGetBidItem2Request $parameters)
    {
        return $this->__soapCall('DoGetBidItem2', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetBlackListUsersRequest $parameters
     * @return Allegro_Web_Api_DoGetBlackListUsersResponse
     */
    public function DoGetBlackListUsers(Allegro_Web_Api_DoGetBlackListUsersRequest $parameters)
    {
        return $this->__soapCall('DoGetBlackListUsers', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetCategoryPathRequest $parameters
     * @return Allegro_Web_Api_DoGetCategoryPathResponse
     */
    public function DoGetCategoryPath(Allegro_Web_Api_DoGetCategoryPathRequest $parameters)
    {
        return $this->__soapCall('DoGetCategoryPath', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetCatsDataRequest $parameters
     * @return Allegro_Web_Api_DoGetCatsDataResponse
     */
    public function DoGetCatsData(Allegro_Web_Api_DoGetCatsDataRequest $parameters)
    {
        return $this->__soapCall('DoGetCatsData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetCatsDataCountRequest $parameters
     * @return Allegro_Web_Api_DoGetCatsDataCountResponse
     */
    public function DoGetCatsDataCount(Allegro_Web_Api_DoGetCatsDataCountRequest $parameters)
    {
        return $this->__soapCall('DoGetCatsDataCount', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetCatsDataLimitRequest $parameters
     * @return Allegro_Web_Api_DoGetCatsDataLimitResponse
     */
    public function DoGetCatsDataLimit(Allegro_Web_Api_DoGetCatsDataLimitRequest $parameters)
    {
        return $this->__soapCall('DoGetCatsDataLimit', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetCountriesRequest $parameters
     * @return Allegro_Web_Api_DoGetCountriesResponse
     */
    public function DoGetCountries(Allegro_Web_Api_DoGetCountriesRequest $parameters)
    {
        return $this->__soapCall('DoGetCountries', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetDealsRequest $parameters
     * @return Allegro_Web_Api_DoGetDealsResponse
     */
    public function DoGetDeals(Allegro_Web_Api_DoGetDealsRequest $parameters)
    {
        return $this->__soapCall('DoGetDeals', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetFavouriteCategoriesRequest $parameters
     * @return Allegro_Web_Api_DoGetFavouriteCategoriesResponse
     */
    public function DoGetFavouriteCategories(Allegro_Web_Api_DoGetFavouriteCategoriesRequest $parameters)
    {
        return $this->__soapCall('DoGetFavouriteCategories', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetFavouriteSellersRequest $parameters
     * @return Allegro_Web_Api_DoGetFavouriteSellersResponse
     */
    public function DoGetFavouriteSellers(Allegro_Web_Api_DoGetFavouriteSellersRequest $parameters)
    {
        return $this->__soapCall('DoGetFavouriteSellers', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetFeedbackRequest $parameters
     * @return Allegro_Web_Api_DoGetFeedbackResponse
     */
    public function DoGetFeedback(Allegro_Web_Api_DoGetFeedbackRequest $parameters)
    {
        return $this->__soapCall('DoGetFeedback', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetFilledPostBuyFormsRequest $parameters
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsResponse
     */
    public function DoGetFilledPostBuyForms(Allegro_Web_Api_DoGetFilledPostBuyFormsRequest $parameters)
    {
        return $this->__soapCall('DoGetFilledPostBuyForms', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetFreeDeliveryAmountRequest $parameters
     * @return Allegro_Web_Api_DoGetFreeDeliveryAmountResponse
     */
    public function DoGetFreeDeliveryAmount(Allegro_Web_Api_DoGetFreeDeliveryAmountRequest $parameters)
    {
        return $this->__soapCall('DoGetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetItemFieldsRequest $parameters
     * @return Allegro_Web_Api_DoGetItemFieldsResponse
     */
    public function DoGetItemFields(Allegro_Web_Api_DoGetItemFieldsRequest $parameters)
    {
        return $this->__soapCall('DoGetItemFields', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetItemTemplatesRequest $parameters
     * @return Allegro_Web_Api_DoGetItemTemplatesResponse
     */
    public function DoGetItemTemplates(Allegro_Web_Api_DoGetItemTemplatesRequest $parameters)
    {
        return $this->__soapCall('DoGetItemTemplates', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetItemsImagesRequest $parameters
     * @return Allegro_Web_Api_DoGetItemsImagesResponse
     */
    public function DoGetItemsImages(Allegro_Web_Api_DoGetItemsImagesRequest $parameters)
    {
        return $this->__soapCall('DoGetItemsImages', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetItemsInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetItemsInfoResponse
     */
    public function DoGetItemsInfo(Allegro_Web_Api_DoGetItemsInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetItemsInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetItemsListRequest $parameters
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function DoGetItemsList(Allegro_Web_Api_DoGetItemsListRequest $parameters)
    {
        return $this->__soapCall('DoGetItemsList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMessageToBuyerRequest $parameters
     * @return Allegro_Web_Api_DoGetMessageToBuyerResponse
     */
    public function DoGetMessageToBuyer(Allegro_Web_Api_DoGetMessageToBuyerRequest $parameters)
    {
        return $this->__soapCall('DoGetMessageToBuyer', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyAddressesRequest $parameters
     * @return Allegro_Web_Api_DoGetMyAddressesResponse
     */
    public function DoGetMyAddresses(Allegro_Web_Api_DoGetMyAddressesRequest $parameters)
    {
        return $this->__soapCall('DoGetMyAddresses', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyBidItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyBidItemsResponse
     */
    public function DoGetMyBidItems(Allegro_Web_Api_DoGetMyBidItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyBidItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeRequest $parameters
     * @return Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse
     */
    public function DoGetMyCurrentShipmentPriceType(Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeRequest $parameters)
    {
        return $this->__soapCall('DoGetMyCurrentShipmentPriceType', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyDataRequest $parameters
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function DoGetMyData(Allegro_Web_Api_DoGetMyDataRequest $parameters)
    {
        return $this->__soapCall('DoGetMyData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyFutureItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyFutureItemsResponse
     */
    public function DoGetMyFutureItems(Allegro_Web_Api_DoGetMyFutureItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyFutureItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyIncomingPaymentsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsResponse
     */
    public function DoGetMyIncomingPayments(Allegro_Web_Api_DoGetMyIncomingPaymentsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyIncomingPayments', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse
     */
    public function DoGetMyIncomingPaymentsRefunds(Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyIncomingPaymentsRefunds', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyNotSoldItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyNotSoldItemsResponse
     */
    public function DoGetMyNotSoldItems(Allegro_Web_Api_DoGetMyNotSoldItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyNotSoldItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyNotWonItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyNotWonItemsResponse
     */
    public function DoGetMyNotWonItems(Allegro_Web_Api_DoGetMyNotWonItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyNotWonItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyPaymentsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyPaymentsResponse
     */
    public function DoGetMyPayments(Allegro_Web_Api_DoGetMyPaymentsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyPayments', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyPaymentsInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetMyPaymentsInfoResponse
     */
    public function DoGetMyPaymentsInfo(Allegro_Web_Api_DoGetMyPaymentsInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetMyPaymentsInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyPaymentsRefundsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyPaymentsRefundsResponse
     */
    public function DoGetMyPaymentsRefunds(Allegro_Web_Api_DoGetMyPaymentsRefundsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyPaymentsRefunds', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyPayoutsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyPayoutsResponse
     */
    public function DoGetMyPayouts(Allegro_Web_Api_DoGetMyPayoutsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyPayouts', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMySellItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMySellItemsResponse
     */
    public function DoGetMySellItems(Allegro_Web_Api_DoGetMySellItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMySellItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMySellRatingRequest $parameters
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function DoGetMySellRating(Allegro_Web_Api_DoGetMySellRatingRequest $parameters)
    {
        return $this->__soapCall('DoGetMySellRating', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMySoldItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMySoldItemsResponse
     */
    public function DoGetMySoldItems(Allegro_Web_Api_DoGetMySoldItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMySoldItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyWatchItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyWatchItemsResponse
     */
    public function DoGetMyWatchItems(Allegro_Web_Api_DoGetMyWatchItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyWatchItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyWatchedItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyWatchedItemsResponse
     */
    public function DoGetMyWatchedItems(Allegro_Web_Api_DoGetMyWatchedItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyWatchedItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetMyWonItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetMyWonItemsResponse
     */
    public function DoGetMyWonItems(Allegro_Web_Api_DoGetMyWonItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetMyWonItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPaymentDataRequest $parameters
     * @return Allegro_Web_Api_DoGetPaymentDataResponse
     */
    public function DoGetPaymentData(Allegro_Web_Api_DoGetPaymentDataRequest $parameters)
    {
        return $this->__soapCall('DoGetPaymentData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPaymentMethodsRequest $parameters
     * @return Allegro_Web_Api_DoGetPaymentMethodsResponse
     */
    public function DoGetPaymentMethods(Allegro_Web_Api_DoGetPaymentMethodsRequest $parameters)
    {
        return $this->__soapCall('DoGetPaymentMethods', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPostBuyDataRequest $parameters
     * @return Allegro_Web_Api_DoGetPostBuyDataResponse
     */
    public function DoGetPostBuyData(Allegro_Web_Api_DoGetPostBuyDataRequest $parameters)
    {
        return $this->__soapCall('DoGetPostBuyData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersRequest $parameters
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse
     */
    public function DoGetPostBuyFormsDataForBuyers(Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersRequest $parameters)
    {
        return $this->__soapCall('DoGetPostBuyFormsDataForBuyers', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest $parameters
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse
     */
    public function DoGetPostBuyFormsDataForSellers(Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest $parameters)
    {
        return $this->__soapCall('DoGetPostBuyFormsDataForSellers', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPostBuyFormsIdsRequest $parameters
     * @return Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
     */
    public function DoGetPostBuyFormsIds(Allegro_Web_Api_DoGetPostBuyFormsIdsRequest $parameters)
    {
        return $this->__soapCall('DoGetPostBuyFormsIds', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetPostBuyItemInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetPostBuyItemInfoResponse
     */
    public function DoGetPostBuyItemInfo(Allegro_Web_Api_DoGetPostBuyItemInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetPostBuyItemInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetRefundsDealsRequest $parameters
     * @return Allegro_Web_Api_DoGetRefundsDealsResponse
     */
    public function DoGetRefundsDeals(Allegro_Web_Api_DoGetRefundsDealsRequest $parameters)
    {
        return $this->__soapCall('DoGetRefundsDeals', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetRefundsListRequest $parameters
     * @return Allegro_Web_Api_DoGetRefundsListResponse
     */
    public function DoGetRefundsList(Allegro_Web_Api_DoGetRefundsListRequest $parameters)
    {
        return $this->__soapCall('DoGetRefundsList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetRefundsReasonsRequest $parameters
     * @return Allegro_Web_Api_DoGetRefundsReasonsResponse
     */
    public function DoGetRefundsReasons(Allegro_Web_Api_DoGetRefundsReasonsRequest $parameters)
    {
        return $this->__soapCall('DoGetRefundsReasons', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetRelatedItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetRelatedItemsResponse
     */
    public function DoGetRelatedItems(Allegro_Web_Api_DoGetRelatedItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetRelatedItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormAttribsRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormAttribsResponse
     */
    public function DoGetSellFormAttribs(Allegro_Web_Api_DoGetSellFormAttribsRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormAttribs', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormFieldsRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormFieldsResponse
     */
    public function DoGetSellFormFields(Allegro_Web_Api_DoGetSellFormFieldsRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormFields', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormFieldsExtRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtResponse
     */
    public function DoGetSellFormFieldsExt(Allegro_Web_Api_DoGetSellFormFieldsExtRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormFieldsExt', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitResponse
     */
    public function DoGetSellFormFieldsExtLimit(Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormFieldsExtLimit', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse
     */
    public function DoGetSellFormFieldsForCategory(Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormFieldsForCategory', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellFormFieldsLimitRequest $parameters
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function DoGetSellFormFieldsLimit(Allegro_Web_Api_DoGetSellFormFieldsLimitRequest $parameters)
    {
        return $this->__soapCall('DoGetSellFormFieldsLimit', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSellRatingReasonsRequest $parameters
     * @return Allegro_Web_Api_DoGetSellRatingReasonsResponse
     */
    public function DoGetSellRatingReasons(Allegro_Web_Api_DoGetSellRatingReasonsRequest $parameters)
    {
        return $this->__soapCall('DoGetSellRatingReasons', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetServiceInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetServiceInfoResponse
     */
    public function DoGetServiceInfo(Allegro_Web_Api_DoGetServiceInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetServiceInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetServiceInfoCategoriesRequest $parameters
     * @return Allegro_Web_Api_DoGetServiceInfoCategoriesResponse
     */
    public function DoGetServiceInfoCategories(Allegro_Web_Api_DoGetServiceInfoCategoriesRequest $parameters)
    {
        return $this->__soapCall('DoGetServiceInfoCategories', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetServiceTemplatesRequest $parameters
     * @return Allegro_Web_Api_DoGetServiceTemplatesResponse
     */
    public function DoGetServiceTemplates(Allegro_Web_Api_DoGetServiceTemplatesRequest $parameters)
    {
        return $this->__soapCall('DoGetServiceTemplates', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSessionHandleForWidgetRequest $parameters
     * @return Allegro_Web_Api_DoGetSessionHandleForWidgetResponse
     */
    public function DoGetSessionHandleForWidget(Allegro_Web_Api_DoGetSessionHandleForWidgetRequest $parameters)
    {
        return $this->__soapCall('DoGetSessionHandleForWidget', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetShipmentDataRequest $parameters
     * @return Allegro_Web_Api_DoGetShipmentDataResponse
     */
    public function DoGetShipmentData(Allegro_Web_Api_DoGetShipmentDataRequest $parameters)
    {
        return $this->__soapCall('DoGetShipmentData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetShipmentDataForRelatedItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse
     */
    public function DoGetShipmentDataForRelatedItems(Allegro_Web_Api_DoGetShipmentDataForRelatedItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetShipmentDataForRelatedItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetShipmentPriceTypesRequest $parameters
     * @return Allegro_Web_Api_DoGetShipmentPriceTypesResponse
     */
    public function DoGetShipmentPriceTypes(Allegro_Web_Api_DoGetShipmentPriceTypesRequest $parameters)
    {
        return $this->__soapCall('DoGetShipmentPriceTypes', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetShopCatsDataRequest $parameters
     * @return Allegro_Web_Api_DoGetShopCatsDataResponse
     */
    public function DoGetShopCatsData(Allegro_Web_Api_DoGetShopCatsDataRequest $parameters)
    {
        return $this->__soapCall('DoGetShopCatsData', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetShopsTagsRequest $parameters
     * @return Allegro_Web_Api_DoGetShopsTagsResponse
     */
    public function DoGetShopsTags(Allegro_Web_Api_DoGetShopsTagsRequest $parameters)
    {
        return $this->__soapCall('DoGetShopsTags', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSiteJournalRequest $parameters
     * @return Allegro_Web_Api_DoGetSiteJournalResponse
     */
    public function DoGetSiteJournal(Allegro_Web_Api_DoGetSiteJournalRequest $parameters)
    {
        return $this->__soapCall('DoGetSiteJournal', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSiteJournalDealsRequest $parameters
     * @return Allegro_Web_Api_DoGetSiteJournalDealsResponse
     */
    public function DoGetSiteJournalDeals(Allegro_Web_Api_DoGetSiteJournalDealsRequest $parameters)
    {
        return $this->__soapCall('DoGetSiteJournalDeals', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSiteJournalDealsInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse
     */
    public function DoGetSiteJournalDealsInfo(Allegro_Web_Api_DoGetSiteJournalDealsInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetSiteJournalDealsInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSiteJournalInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetSiteJournalInfoResponse
     */
    public function DoGetSiteJournalInfo(Allegro_Web_Api_DoGetSiteJournalInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetSiteJournalInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSitesFlagInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetSitesFlagInfoResponse
     */
    public function DoGetSitesFlagInfo(Allegro_Web_Api_DoGetSitesFlagInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetSitesFlagInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSitesInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetSitesInfoResponse
     */
    public function DoGetSitesInfo(Allegro_Web_Api_DoGetSitesInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetSitesInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSpecialItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetSpecialItemsResponse
     */
    public function DoGetSpecialItems(Allegro_Web_Api_DoGetSpecialItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetSpecialItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetStatesInfoRequest $parameters
     * @return Allegro_Web_Api_DoGetStatesInfoResponse
     */
    public function DoGetStatesInfo(Allegro_Web_Api_DoGetStatesInfoRequest $parameters)
    {
        return $this->__soapCall('DoGetStatesInfo', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetSystemTimeRequest $parameters
     * @return Allegro_Web_Api_DoGetSystemTimeResponse
     */
    public function DoGetSystemTime(Allegro_Web_Api_DoGetSystemTimeRequest $parameters)
    {
        return $this->__soapCall('DoGetSystemTime', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetTransactionsIDsRequest $parameters
     * @return Allegro_Web_Api_DoGetTransactionsIDsResponse
     */
    public function DoGetTransactionsIDs(Allegro_Web_Api_DoGetTransactionsIDsRequest $parameters)
    {
        return $this->__soapCall('DoGetTransactionsIDs', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetUserIDRequest $parameters
     * @return Allegro_Web_Api_DoGetUserIDResponse
     */
    public function DoGetUserID(Allegro_Web_Api_DoGetUserIDRequest $parameters)
    {
        return $this->__soapCall('DoGetUserID', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetUserItemsRequest $parameters
     * @return Allegro_Web_Api_DoGetUserItemsResponse
     */
    public function DoGetUserItems(Allegro_Web_Api_DoGetUserItemsRequest $parameters)
    {
        return $this->__soapCall('DoGetUserItems', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetUserLicenceDateRequest $parameters
     * @return Allegro_Web_Api_DoGetUserLicenceDateResponse
     */
    public function DoGetUserLicenceDate(Allegro_Web_Api_DoGetUserLicenceDateRequest $parameters)
    {
        return $this->__soapCall('DoGetUserLicenceDate', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetUserLoginRequest $parameters
     * @return Allegro_Web_Api_DoGetUserLoginResponse
     */
    public function DoGetUserLogin(Allegro_Web_Api_DoGetUserLoginRequest $parameters)
    {
        return $this->__soapCall('DoGetUserLogin', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetWaitingFeedbacksRequest $parameters
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksResponse
     */
    public function DoGetWaitingFeedbacks(Allegro_Web_Api_DoGetWaitingFeedbacksRequest $parameters)
    {
        return $this->__soapCall('DoGetWaitingFeedbacks', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoGetWaitingFeedbacksCountRequest $parameters
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse
     */
    public function DoGetWaitingFeedbacksCount(Allegro_Web_Api_DoGetWaitingFeedbacksCountRequest $parameters)
    {
        return $this->__soapCall('DoGetWaitingFeedbacksCount', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoInternalIStoreChangeRequest $parameters
     * @return Allegro_Web_Api_DoInternalIStoreChangeResponse
     */
    public function doInternalIStoreChange(Allegro_Web_Api_DoInternalIStoreChangeRequest $parameters)
    {
        return $this->__soapCall('doInternalIStoreChange', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoLoginRequest $parameters
     * @return Allegro_Web_Api_DoLoginResponse
     */
    public function doLogin(Allegro_Web_Api_DoLoginRequest $parameters)
    {
        return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoLoginEncRequest $parameters
     * @return Allegro_Web_Api_DoLoginEncResponse
     */
    public function doLoginEnc(Allegro_Web_Api_DoLoginEncRequest $parameters)
    {
        return $this->__soapCall('doLoginEnc', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoLoginWithAccessTokenRequest $parameters
     * @return Allegro_Web_Api_DoLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(Allegro_Web_Api_DoLoginWithAccessTokenRequest $parameters)
    {
        return $this->__soapCall('doLoginWithAccessToken', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyAccount2Request $parameters
     * @return Allegro_Web_Api_DoMyAccount2Response
     */
    public function doMyAccount2(Allegro_Web_Api_DoMyAccount2Request $parameters)
    {
        return $this->__soapCall('doMyAccount2', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyAccountItemsCountRequest $parameters
     * @return Allegro_Web_Api_DoMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(Allegro_Web_Api_DoMyAccountItemsCountRequest $parameters)
    {
        return $this->__soapCall('doMyAccountItemsCount', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyBillingRequest $parameters
     * @return Allegro_Web_Api_DoMyBillingResponse
     */
    public function doMyBilling(Allegro_Web_Api_DoMyBillingRequest $parameters)
    {
        return $this->__soapCall('doMyBilling', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyBillingItemRequest $parameters
     * @return Allegro_Web_Api_DoMyBillingItemResponse
     */
    public function doMyBillingItem(Allegro_Web_Api_DoMyBillingItemRequest $parameters)
    {
        return $this->__soapCall('doMyBillingItem', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyContactRequest $parameters
     * @return Allegro_Web_Api_DoMyContactResponse
     */
    public function doMyContact(Allegro_Web_Api_DoMyContactRequest $parameters)
    {
        return $this->__soapCall('doMyContact', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyFeedback2Request $parameters
     * @return Allegro_Web_Api_DoMyFeedback2Response
     */
    public function doMyFeedback2(Allegro_Web_Api_DoMyFeedback2Request $parameters)
    {
        return $this->__soapCall('doMyFeedback2', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoMyFeedback2LimitRequest $parameters
     * @return Allegro_Web_Api_DoMyFeedback2LimitResponse
     */
    public function doMyFeedback2Limit(Allegro_Web_Api_DoMyFeedback2LimitRequest $parameters)
    {
        return $this->__soapCall('doMyFeedback2Limit', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoNewAuctionExtRequest $parameters
     * @return Allegro_Web_Api_DoNewAuctionExtResponse
     */
    public function doNewAuctionExt(Allegro_Web_Api_DoNewAuctionExtRequest $parameters)
    {
        return $this->__soapCall('doNewAuctionExt', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoQueryAllSysStatusRequest $parameters
     * @return Allegro_Web_Api_DoQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(Allegro_Web_Api_DoQueryAllSysStatusRequest $parameters)
    {
        return $this->__soapCall('doQueryAllSysStatus', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoQuerySysStatusRequest $parameters
     * @return Allegro_Web_Api_DoQuerySysStatusResponse
     */
    public function doQuerySysStatus(Allegro_Web_Api_DoQuerySysStatusRequest $parameters)
    {
        return $this->__soapCall('doQuerySysStatus', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRemoveFromBlackListRequest $parameters
     * @return Allegro_Web_Api_DoRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(Allegro_Web_Api_DoRemoveFromBlackListRequest $parameters)
    {
        return $this->__soapCall('doRemoveFromBlackList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRemoveFromWatchListRequest $parameters
     * @return Allegro_Web_Api_DoRemoveFromWatchListResponse
     */
    public function doRemoveFromWatchList(Allegro_Web_Api_DoRemoveFromWatchListRequest $parameters)
    {
        return $this->__soapCall('doRemoveFromWatchList', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRemoveItemTemplatesRequest $parameters
     * @return Allegro_Web_Api_DoRemoveItemTemplatesResponse
     */
    public function doRemoveItemTemplates(Allegro_Web_Api_DoRemoveItemTemplatesRequest $parameters)
    {
        return $this->__soapCall('doRemoveItemTemplates', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRequestCancelBidRequest $parameters
     * @return Allegro_Web_Api_DoRequestCancelBidResponse
     */
    public function doRequestCancelBid(Allegro_Web_Api_DoRequestCancelBidRequest $parameters)
    {
        return $this->__soapCall('doRequestCancelBid', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRequestPayoutRequest $parameters
     * @return Allegro_Web_Api_DoRequestPayoutResponse
     */
    public function doRequestPayout(Allegro_Web_Api_DoRequestPayoutRequest $parameters)
    {
        return $this->__soapCall('doRequestPayout', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoRequestSurchargeRequest $parameters
     * @return Allegro_Web_Api_DoRequestSurchargeResponse
     */
    public function doRequestSurcharge(Allegro_Web_Api_DoRequestSurchargeRequest $parameters)
    {
        return $this->__soapCall('doRequestSurcharge', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSearchRequest $parameters
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function doSearch(Allegro_Web_Api_DoSearchRequest $parameters)
    {
        return $this->__soapCall('doSearch', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSellSomeAgainRequest $parameters
     * @return Allegro_Web_Api_DoSellSomeAgainResponse
     */
    public function doSellSomeAgain(Allegro_Web_Api_DoSellSomeAgainRequest $parameters)
    {
        return $this->__soapCall('doSellSomeAgain', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSellSomeAgainInShopRequest $parameters
     * @return Allegro_Web_Api_DoSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(Allegro_Web_Api_DoSellSomeAgainInShopRequest $parameters)
    {
        return $this->__soapCall('doSellSomeAgainInShop', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSendEmailToUserRequest $parameters
     * @return Allegro_Web_Api_DoSendEmailToUserResponse
     */
    public function doSendEmailToUser(Allegro_Web_Api_DoSendEmailToUserRequest $parameters)
    {
        return $this->__soapCall('doSendEmailToUser', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSendPostBuyFormRequest $parameters
     * @return Allegro_Web_Api_DoSendPostBuyFormResponse
     */
    public function doSendPostBuyForm(Allegro_Web_Api_DoSendPostBuyFormRequest $parameters)
    {
        return $this->__soapCall('doSendPostBuyForm', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSendRefundFormRequest $parameters
     * @return Allegro_Web_Api_DoSendRefundFormResponse
     */
    public function doSendRefundForm(Allegro_Web_Api_DoSendRefundFormRequest $parameters)
    {
        return $this->__soapCall('doSendRefundForm', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSetFreeDeliveryAmountRequest $parameters
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(Allegro_Web_Api_DoSetFreeDeliveryAmountRequest $parameters)
    {
        return $this->__soapCall('doSetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSetShipmentPriceTypeRequest $parameters
     * @return Allegro_Web_Api_DoSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(Allegro_Web_Api_DoSetShipmentPriceTypeRequest $parameters)
    {
        return $this->__soapCall('doSetShipmentPriceType', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoSetUserLicenceDateRequest $parameters
     * @return Allegro_Web_Api_DoSetUserLicenceDateResponse
     */
    public function doSetUserLicenceDate(Allegro_Web_Api_DoSetUserLicenceDateRequest $parameters)
    {
        return $this->__soapCall('doSetUserLicenceDate', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoShowCatRequest $parameters
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function doShowCat(Allegro_Web_Api_DoShowCatRequest $parameters)
    {
        return $this->__soapCall('doShowCat', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoShowItemInfoExtRequest $parameters
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(Allegro_Web_Api_DoShowItemInfoExtRequest $parameters)
    {
        return $this->__soapCall('doShowItemInfoExt', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoShowUserRequest $parameters
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function doShowUser(Allegro_Web_Api_DoShowUserRequest $parameters)
    {
        return $this->__soapCall('doShowUser', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoShowUserPageRequest $parameters
     * @return Allegro_Web_Api_DoShowUserPageResponse
     */
    public function doShowUserPage(Allegro_Web_Api_DoShowUserPageRequest $parameters)
    {
        return $this->__soapCall('doShowUserPage', array($parameters));
    }

    /**
     * @param Allegro_Web_Api_DoVerifyItemRequest $parameters
     * @return Allegro_Web_Api_DoVerifyItemResponse
     */
    public function doVerifyItem(Allegro_Web_Api_DoVerifyItemRequest $parameters)
    {
        return $this->__soapCall('doVerifyItem', array($parameters));
    }
}
