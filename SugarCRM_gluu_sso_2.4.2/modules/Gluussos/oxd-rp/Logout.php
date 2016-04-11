<?php

/**
 * Created by Vlad Karapetyan
 */
require_once 'Client_OXD_RP.php';

class Logout extends Client_OXD_RP
{
    /**start parameter for request!**/
    private $request_oxd_id = null;
    private $request_id_token = null;
    private $request_post_logout_redirect_uri = null;
    private $request_session_state = null;
    private $request_state = null;
    /**end request parameter**/

    /**start parameter for response!**/
    private $response_html;
    /**end response parameter**/

    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
    }

    /**
     * @return null
     */
    public function getRequestState()
    {
        return $this->request_state;
    }

    /**
     * @param null $request_state
     */
    public function setRequestState($request_state)
    {
        $this->request_state = $request_state;
    }

    /**
     * @return null
     */
    public function getRequestSessionState()
    {
        return $this->request_session_state;
    }

    /**
     * @param null $request_session_state
     */
    public function setRequestSessionState($request_session_state)
    {
        $this->request_session_state = $request_session_state;
    }


    /**
     * @param null $request_post_logout_redirect_uri
     */
    public function setRequestPostLogoutRedirectUri($request_post_logout_redirect_uri)
    {
        $this->request_post_logout_redirect_uri = $request_post_logout_redirect_uri;
    }

    /**
     * @return mixed
     */
    public function getResponseHtml()
    {
        return $this->response_html;
    }

    /**
     * @return null
     */
    public function getRequestIdToken()
    {
        return $this->request_id_token;
    }

    /**
     * @return null
     */
    public function getRequestPostLogoutRedirectUri()
    {
        return $this->request_post_logout_redirect_uri;
    }

    /**
     * @param null $request_id_token
     */
    public function setRequestIdToken($request_id_token)
    {
        $this->request_id_token = $request_id_token;
    }

    /**
     * @return mixed
     */
    public function getRequestOxdId()
    {
        return $this->request_oxd_id;
    }

    /**
     * @param mixed $request_oxd_id
     */
    public function setRequestOxdId($request_oxd_id)
    {
        $this->request_oxd_id = $request_oxd_id;
    }



    public function setCommand()
    {
        $this->command = 'get_logout_uri';
    }

    public function setParams()
    {
        $this->params = array(
            "oxd_id" => $this->getRequestOxdId(),
            "id_token_hint" => $this->getRequestIdToken(),
            "post_logout_redirect_uri" => $this->getRequestPostLogoutRedirectUri(),
            "state" => $this->getRequestState(),
            "session_state" => $this->getRequestSessionState()
        );
    }

}