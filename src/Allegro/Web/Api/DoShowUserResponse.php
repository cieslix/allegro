<?php

/**
 * Class Allegro_Web_Api_DoShowUserResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowUserResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @var int $userCreateDate
     */
    protected $userCreateDate = null;

    /**
     * @var int $userLoginDate
     */
    protected $userLoginDate = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var int $userIsNewUser
     */
    protected $userIsNewUser = null;

    /**
     * @var int $userNotActivated
     */
    protected $userNotActivated = null;

    /**
     * @var int $userClosed
     */
    protected $userClosed = null;

    /**
     * @var int $userBlocked
     */
    protected $userBlocked = null;

    /**
     * @var int $userTerminated
     */
    protected $userTerminated = null;

    /**
     * @var int $userHasPage
     */
    protected $userHasPage = null;

    /**
     * @var int $userIsSseller
     */
    protected $userIsSseller = null;

    /**
     * @var int $userIsEco
     */
    protected $userIsEco = null;

    /**
     * @var Allegro_Web_Api_ShowUserFeedbacks $userPositiveFeedback
     */
    protected $userPositiveFeedback = null;

    /**
     * @var Allegro_Web_Api_ShowUserFeedbacks $userNegativeFeedback
     */
    protected $userNegativeFeedback = null;

    /**
     * @var Allegro_Web_Api_ShowUserFeedbacks $userNeutralFeedback
     */
    protected $userNeutralFeedback = null;

    /**
     * @var int $userJuniorStatus
     */
    protected $userJuniorStatus = null;

    /**
     * @var int $userHasShop
     */
    protected $userHasShop = null;

    /**
     * @var int $userCompanyIcon
     */
    protected $userCompanyIcon = null;

    /**
     * @var int $userSellRatingCount
     */
    protected $userSellRatingCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingaveragestruct $userSellRatingAverage
     */
    protected $userSellRatingAverage = null;

    /**
     * @var int $userIsAllegroStandard
     */
    protected $userIsAllegroStandard = null;

    /**
     * @var int $userIsB2cSeller
     */
    protected $userIsB2cSeller = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userCountry
     * @param int $userCreateDate
     * @param int $userLoginDate
     * @param int $userRating
     * @param int $userIsNewUser
     * @param int $userNotActivated
     * @param int $userClosed
     * @param int $userBlocked
     * @param int $userTerminated
     * @param int $userHasPage
     * @param int $userIsSseller
     * @param int $userIsEco
     * @param Allegro_Web_Api_ShowUserFeedbacks $userPositiveFeedback
     * @param Allegro_Web_Api_ShowUserFeedbacks $userNegativeFeedback
     * @param Allegro_Web_Api_ShowUserFeedbacks $userNeutralFeedback
     * @param int $userJuniorStatus
     * @param int $userHasShop
     * @param int $userCompanyIcon
     * @param int $userSellRatingCount
     * @param Allegro_Web_Api_ArrayOfSellratingaveragestruct $userSellRatingAverage
     * @param int $userIsAllegroStandard
     * @param int $userIsB2cSeller
     */
    public function __construct($userId, $userLogin, $userCountry, $userCreateDate, $userLoginDate, $userRating, $userIsNewUser, $userNotActivated, $userClosed, $userBlocked, $userTerminated, $userHasPage, $userIsSseller, $userIsEco, $userPositiveFeedback, $userNegativeFeedback, $userNeutralFeedback, $userJuniorStatus, $userHasShop, $userCompanyIcon, $userSellRatingCount, $userSellRatingAverage, $userIsAllegroStandard, $userIsB2cSeller)
    {
        $this->userId = $userId;
        $this->userLogin = $userLogin;
        $this->userCountry = $userCountry;
        $this->userCreateDate = $userCreateDate;
        $this->userLoginDate = $userLoginDate;
        $this->userRating = $userRating;
        $this->userIsNewUser = $userIsNewUser;
        $this->userNotActivated = $userNotActivated;
        $this->userClosed = $userClosed;
        $this->userBlocked = $userBlocked;
        $this->userTerminated = $userTerminated;
        $this->userHasPage = $userHasPage;
        $this->userIsSseller = $userIsSseller;
        $this->userIsEco = $userIsEco;
        $this->userPositiveFeedback = $userPositiveFeedback;
        $this->userNegativeFeedback = $userNegativeFeedback;
        $this->userNeutralFeedback = $userNeutralFeedback;
        $this->userJuniorStatus = $userJuniorStatus;
        $this->userHasShop = $userHasShop;
        $this->userCompanyIcon = $userCompanyIcon;
        $this->userSellRatingCount = $userSellRatingCount;
        $this->userSellRatingAverage = $userSellRatingAverage;
        $this->userIsAllegroStandard = $userIsAllegroStandard;
        $this->userIsB2cSeller = $userIsB2cSeller;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCreateDate()
    {
        return $this->userCreateDate;
    }

    /**
     * @param int $userCreateDate
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserCreateDate($userCreateDate)
    {
        $this->userCreateDate = $userCreateDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserLoginDate()
    {
        return $this->userLoginDate;
    }

    /**
     * @param int $userLoginDate
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserLoginDate($userLoginDate)
    {
        $this->userLoginDate = $userLoginDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserRating()
    {
        return $this->userRating;
    }

    /**
     * @param int $userRating
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserRating($userRating)
    {
        $this->userRating = $userRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIsNewUser()
    {
        return $this->userIsNewUser;
    }

    /**
     * @param int $userIsNewUser
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserIsNewUser($userIsNewUser)
    {
        $this->userIsNewUser = $userIsNewUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserNotActivated()
    {
        return $this->userNotActivated;
    }

    /**
     * @param int $userNotActivated
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserNotActivated($userNotActivated)
    {
        $this->userNotActivated = $userNotActivated;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserClosed()
    {
        return $this->userClosed;
    }

    /**
     * @param int $userClosed
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserClosed($userClosed)
    {
        $this->userClosed = $userClosed;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserBlocked()
    {
        return $this->userBlocked;
    }

    /**
     * @param int $userBlocked
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserBlocked($userBlocked)
    {
        $this->userBlocked = $userBlocked;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserTerminated()
    {
        return $this->userTerminated;
    }

    /**
     * @param int $userTerminated
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserTerminated($userTerminated)
    {
        $this->userTerminated = $userTerminated;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserHasPage()
    {
        return $this->userHasPage;
    }

    /**
     * @param int $userHasPage
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserHasPage($userHasPage)
    {
        $this->userHasPage = $userHasPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIsSseller()
    {
        return $this->userIsSseller;
    }

    /**
     * @param int $userIsSseller
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserIsSseller($userIsSseller)
    {
        $this->userIsSseller = $userIsSseller;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIsEco()
    {
        return $this->userIsEco;
    }

    /**
     * @param int $userIsEco
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserIsEco($userIsEco)
    {
        $this->userIsEco = $userIsEco;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function getUserPositiveFeedback()
    {
        return $this->userPositiveFeedback;
    }

    /**
     * @param Allegro_Web_Api_ShowUserFeedbacks $userPositiveFeedback
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserPositiveFeedback($userPositiveFeedback)
    {
        $this->userPositiveFeedback = $userPositiveFeedback;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function getUserNegativeFeedback()
    {
        return $this->userNegativeFeedback;
    }

    /**
     * @param Allegro_Web_Api_ShowUserFeedbacks $userNegativeFeedback
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserNegativeFeedback($userNegativeFeedback)
    {
        $this->userNegativeFeedback = $userNegativeFeedback;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function getUserNeutralFeedback()
    {
        return $this->userNeutralFeedback;
    }

    /**
     * @param Allegro_Web_Api_ShowUserFeedbacks $userNeutralFeedback
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserNeutralFeedback($userNeutralFeedback)
    {
        $this->userNeutralFeedback = $userNeutralFeedback;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserJuniorStatus()
    {
        return $this->userJuniorStatus;
    }

    /**
     * @param int $userJuniorStatus
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserJuniorStatus($userJuniorStatus)
    {
        $this->userJuniorStatus = $userJuniorStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserHasShop()
    {
        return $this->userHasShop;
    }

    /**
     * @param int $userHasShop
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserHasShop($userHasShop)
    {
        $this->userHasShop = $userHasShop;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCompanyIcon()
    {
        return $this->userCompanyIcon;
    }

    /**
     * @param int $userCompanyIcon
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserCompanyIcon($userCompanyIcon)
    {
        $this->userCompanyIcon = $userCompanyIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserSellRatingCount()
    {
        return $this->userSellRatingCount;
    }

    /**
     * @param int $userSellRatingCount
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserSellRatingCount($userSellRatingCount)
    {
        $this->userSellRatingCount = $userSellRatingCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingaveragestruct
     */
    public function getUserSellRatingAverage()
    {
        return $this->userSellRatingAverage;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingaveragestruct $userSellRatingAverage
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserSellRatingAverage($userSellRatingAverage)
    {
        $this->userSellRatingAverage = $userSellRatingAverage;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIsAllegroStandard()
    {
        return $this->userIsAllegroStandard;
    }

    /**
     * @param int $userIsAllegroStandard
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserIsAllegroStandard($userIsAllegroStandard)
    {
        $this->userIsAllegroStandard = $userIsAllegroStandard;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIsB2cSeller()
    {
        return $this->userIsB2cSeller;
    }

    /**
     * @param int $userIsB2cSeller
     * @return Allegro_Web_Api_DoShowUserResponse
     */
    public function setUserIsB2cSeller($userIsB2cSeller)
    {
        $this->userIsB2cSeller = $userIsB2cSeller;
        return $this;
    }
}
