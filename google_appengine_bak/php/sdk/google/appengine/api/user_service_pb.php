<?php
/**
 * Copyright 2007 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
# Generated by the protocol buffer compiler. DO NOT EDIT!
# source: google/appengine/api/user_service.proto

namespace dummy {
  require_once 'google/appengine/runtime/proto/ProtocolMessage.php';
}
namespace google\appengine\UserServiceError {
  class ErrorCode {
    const OK = 0;
    const REDIRECT_URL_TOO_LONG = 1;
    const NOT_ALLOWED = 2;
    const OAUTH_INVALID_TOKEN = 3;
    const OAUTH_INVALID_REQUEST = 4;
    const OAUTH_ERROR = 5;
  }
}
namespace google\appengine {
  class UserServiceError extends \google\net\ProtocolMessage {
    public function clear() {
    }
    public function byteSizePartial() {
      $res = 0;
      return $res;
    }
    public function outputPartial($out) {
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      return $res;
    }
  }
}
namespace google\appengine {
  class CreateLoginURLRequest extends \google\net\ProtocolMessage {
    public function getDestinationUrl() {
      if (!isset($this->destination_url)) {
        return '';
      }
      return $this->destination_url;
    }
    public function setDestinationUrl($val) {
      $this->destination_url = $val;
      return $this;
    }
    public function clearDestinationUrl() {
      unset($this->destination_url);
      return $this;
    }
    public function hasDestinationUrl() {
      return isset($this->destination_url);
    }
    public function getAuthDomain() {
      if (!isset($this->auth_domain)) {
        return '';
      }
      return $this->auth_domain;
    }
    public function setAuthDomain($val) {
      $this->auth_domain = $val;
      return $this;
    }
    public function clearAuthDomain() {
      unset($this->auth_domain);
      return $this;
    }
    public function hasAuthDomain() {
      return isset($this->auth_domain);
    }
    public function getFederatedIdentity() {
      if (!isset($this->federated_identity)) {
        return '';
      }
      return $this->federated_identity;
    }
    public function setFederatedIdentity($val) {
      $this->federated_identity = $val;
      return $this;
    }
    public function clearFederatedIdentity() {
      unset($this->federated_identity);
      return $this;
    }
    public function hasFederatedIdentity() {
      return isset($this->federated_identity);
    }
    public function clear() {
      $this->clearDestinationUrl();
      $this->clearAuthDomain();
      $this->clearFederatedIdentity();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->destination_url)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->destination_url));
      }
      if (isset($this->auth_domain)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->auth_domain));
      }
      if (isset($this->federated_identity)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->federated_identity));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->destination_url)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->destination_url);
      }
      if (isset($this->auth_domain)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->auth_domain);
      }
      if (isset($this->federated_identity)) {
        $out->putVarInt32(26);
        $out->putPrefixedString($this->federated_identity);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setDestinationUrl(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setAuthDomain(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 26:
            $length = $d->getVarInt32();
            $this->setFederatedIdentity(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->destination_url)) return 'destination_url';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasDestinationUrl()) {
        $this->setDestinationUrl($x->getDestinationUrl());
      }
      if ($x->hasAuthDomain()) {
        $this->setAuthDomain($x->getAuthDomain());
      }
      if ($x->hasFederatedIdentity()) {
        $this->setFederatedIdentity($x->getFederatedIdentity());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->destination_url) !== isset($x->destination_url)) return false;
      if (isset($this->destination_url) && $this->destination_url !== $x->destination_url) return false;
      if (isset($this->auth_domain) !== isset($x->auth_domain)) return false;
      if (isset($this->auth_domain) && $this->auth_domain !== $x->auth_domain) return false;
      if (isset($this->federated_identity) !== isset($x->federated_identity)) return false;
      if (isset($this->federated_identity) && $this->federated_identity !== $x->federated_identity) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->destination_url)) {
        $res .= $prefix . "destination_url: " . $this->debugFormatString($this->destination_url) . "\n";
      }
      if (isset($this->auth_domain)) {
        $res .= $prefix . "auth_domain: " . $this->debugFormatString($this->auth_domain) . "\n";
      }
      if (isset($this->federated_identity)) {
        $res .= $prefix . "federated_identity: " . $this->debugFormatString($this->federated_identity) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class CreateLoginURLResponse extends \google\net\ProtocolMessage {
    public function getLoginUrl() {
      if (!isset($this->login_url)) {
        return '';
      }
      return $this->login_url;
    }
    public function setLoginUrl($val) {
      $this->login_url = $val;
      return $this;
    }
    public function clearLoginUrl() {
      unset($this->login_url);
      return $this;
    }
    public function hasLoginUrl() {
      return isset($this->login_url);
    }
    public function clear() {
      $this->clearLoginUrl();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->login_url)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->login_url));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->login_url)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->login_url);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setLoginUrl(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->login_url)) return 'login_url';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasLoginUrl()) {
        $this->setLoginUrl($x->getLoginUrl());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->login_url) !== isset($x->login_url)) return false;
      if (isset($this->login_url) && $this->login_url !== $x->login_url) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->login_url)) {
        $res .= $prefix . "login_url: " . $this->debugFormatString($this->login_url) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class CreateLogoutURLRequest extends \google\net\ProtocolMessage {
    public function getDestinationUrl() {
      if (!isset($this->destination_url)) {
        return '';
      }
      return $this->destination_url;
    }
    public function setDestinationUrl($val) {
      $this->destination_url = $val;
      return $this;
    }
    public function clearDestinationUrl() {
      unset($this->destination_url);
      return $this;
    }
    public function hasDestinationUrl() {
      return isset($this->destination_url);
    }
    public function getAuthDomain() {
      if (!isset($this->auth_domain)) {
        return '';
      }
      return $this->auth_domain;
    }
    public function setAuthDomain($val) {
      $this->auth_domain = $val;
      return $this;
    }
    public function clearAuthDomain() {
      unset($this->auth_domain);
      return $this;
    }
    public function hasAuthDomain() {
      return isset($this->auth_domain);
    }
    public function clear() {
      $this->clearDestinationUrl();
      $this->clearAuthDomain();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->destination_url)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->destination_url));
      }
      if (isset($this->auth_domain)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->auth_domain));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->destination_url)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->destination_url);
      }
      if (isset($this->auth_domain)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->auth_domain);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setDestinationUrl(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setAuthDomain(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->destination_url)) return 'destination_url';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasDestinationUrl()) {
        $this->setDestinationUrl($x->getDestinationUrl());
      }
      if ($x->hasAuthDomain()) {
        $this->setAuthDomain($x->getAuthDomain());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->destination_url) !== isset($x->destination_url)) return false;
      if (isset($this->destination_url) && $this->destination_url !== $x->destination_url) return false;
      if (isset($this->auth_domain) !== isset($x->auth_domain)) return false;
      if (isset($this->auth_domain) && $this->auth_domain !== $x->auth_domain) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->destination_url)) {
        $res .= $prefix . "destination_url: " . $this->debugFormatString($this->destination_url) . "\n";
      }
      if (isset($this->auth_domain)) {
        $res .= $prefix . "auth_domain: " . $this->debugFormatString($this->auth_domain) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class CreateLogoutURLResponse extends \google\net\ProtocolMessage {
    public function getLogoutUrl() {
      if (!isset($this->logout_url)) {
        return '';
      }
      return $this->logout_url;
    }
    public function setLogoutUrl($val) {
      $this->logout_url = $val;
      return $this;
    }
    public function clearLogoutUrl() {
      unset($this->logout_url);
      return $this;
    }
    public function hasLogoutUrl() {
      return isset($this->logout_url);
    }
    public function clear() {
      $this->clearLogoutUrl();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->logout_url)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->logout_url));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->logout_url)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->logout_url);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setLogoutUrl(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->logout_url)) return 'logout_url';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasLogoutUrl()) {
        $this->setLogoutUrl($x->getLogoutUrl());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->logout_url) !== isset($x->logout_url)) return false;
      if (isset($this->logout_url) && $this->logout_url !== $x->logout_url) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->logout_url)) {
        $res .= $prefix . "logout_url: " . $this->debugFormatString($this->logout_url) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class GetOAuthUserRequest extends \google\net\ProtocolMessage {
    private $scopes = array();
    public function getScope() {
      if (!isset($this->scope)) {
        return '';
      }
      return $this->scope;
    }
    public function setScope($val) {
      $this->scope = $val;
      return $this;
    }
    public function clearScope() {
      unset($this->scope);
      return $this;
    }
    public function hasScope() {
      return isset($this->scope);
    }
    public function getScopesSize() {
      return sizeof($this->scopes);
    }
    public function getScopesList() {
      return $this->scopes;
    }
    public function getScopes($idx) {
      return $this->scopes[$idx];
    }
    public function setScopes($idx, $val) {
      $this->scopes[$idx] = $val;
      return $this;
    }
    public function addScopes($val) {
      $this->scopes[] = $val;
      return $this;
    }
    public function clearScopes() {
      $this->scopes = array();
    }
    public function clear() {
      $this->clearScope();
      $this->clearScopes();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->scope)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->scope));
      }
      $this->checkProtoArray($this->scopes);
      $res += 1 * sizeof($this->scopes);
      foreach ($this->scopes as $value) {
        $res += $this->lengthString(strlen($value));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->scope)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->scope);
      }
      $this->checkProtoArray($this->scopes);
      foreach ($this->scopes as $value) {
        $out->putVarInt32(18);
        $out->putPrefixedString($value);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setScope(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->addScopes(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasScope()) {
        $this->setScope($x->getScope());
      }
      foreach ($x->getScopesList() as $v) {
        $this->addScopes($v);
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->scope) !== isset($x->scope)) return false;
      if (isset($this->scope) && $this->scope !== $x->scope) return false;
      if (sizeof($this->scopes) !== sizeof($x->scopes)) return false;
      foreach (array_map(null, $this->scopes, $x->scopes) as $v) {
        if ($v[0] !== $v[1]) return false;
      }
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->scope)) {
        $res .= $prefix . "scope: " . $this->debugFormatString($this->scope) . "\n";
      }
      foreach ($this->scopes as $value) {
        $res .= $prefix . "scopes: " . $this->debugFormatString($value) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class GetOAuthUserResponse extends \google\net\ProtocolMessage {
    private $scopes = array();
    public function getEmail() {
      if (!isset($this->email)) {
        return '';
      }
      return $this->email;
    }
    public function setEmail($val) {
      $this->email = $val;
      return $this;
    }
    public function clearEmail() {
      unset($this->email);
      return $this;
    }
    public function hasEmail() {
      return isset($this->email);
    }
    public function getUserId() {
      if (!isset($this->user_id)) {
        return '';
      }
      return $this->user_id;
    }
    public function setUserId($val) {
      $this->user_id = $val;
      return $this;
    }
    public function clearUserId() {
      unset($this->user_id);
      return $this;
    }
    public function hasUserId() {
      return isset($this->user_id);
    }
    public function getAuthDomain() {
      if (!isset($this->auth_domain)) {
        return '';
      }
      return $this->auth_domain;
    }
    public function setAuthDomain($val) {
      $this->auth_domain = $val;
      return $this;
    }
    public function clearAuthDomain() {
      unset($this->auth_domain);
      return $this;
    }
    public function hasAuthDomain() {
      return isset($this->auth_domain);
    }
    public function getUserOrganization() {
      if (!isset($this->user_organization)) {
        return '';
      }
      return $this->user_organization;
    }
    public function setUserOrganization($val) {
      $this->user_organization = $val;
      return $this;
    }
    public function clearUserOrganization() {
      unset($this->user_organization);
      return $this;
    }
    public function hasUserOrganization() {
      return isset($this->user_organization);
    }
    public function getIsAdmin() {
      if (!isset($this->is_admin)) {
        return false;
      }
      return $this->is_admin;
    }
    public function setIsAdmin($val) {
      $this->is_admin = $val;
      return $this;
    }
    public function clearIsAdmin() {
      unset($this->is_admin);
      return $this;
    }
    public function hasIsAdmin() {
      return isset($this->is_admin);
    }
    public function getClientId() {
      if (!isset($this->client_id)) {
        return '';
      }
      return $this->client_id;
    }
    public function setClientId($val) {
      $this->client_id = $val;
      return $this;
    }
    public function clearClientId() {
      unset($this->client_id);
      return $this;
    }
    public function hasClientId() {
      return isset($this->client_id);
    }
    public function getScopesSize() {
      return sizeof($this->scopes);
    }
    public function getScopesList() {
      return $this->scopes;
    }
    public function getScopes($idx) {
      return $this->scopes[$idx];
    }
    public function setScopes($idx, $val) {
      $this->scopes[$idx] = $val;
      return $this;
    }
    public function addScopes($val) {
      $this->scopes[] = $val;
      return $this;
    }
    public function clearScopes() {
      $this->scopes = array();
    }
    public function clear() {
      $this->clearEmail();
      $this->clearUserId();
      $this->clearAuthDomain();
      $this->clearUserOrganization();
      $this->clearIsAdmin();
      $this->clearClientId();
      $this->clearScopes();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->email)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->email));
      }
      if (isset($this->user_id)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->user_id));
      }
      if (isset($this->auth_domain)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->auth_domain));
      }
      if (isset($this->user_organization)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->user_organization));
      }
      if (isset($this->is_admin)) {
        $res += 2;
      }
      if (isset($this->client_id)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->client_id));
      }
      $this->checkProtoArray($this->scopes);
      $res += 1 * sizeof($this->scopes);
      foreach ($this->scopes as $value) {
        $res += $this->lengthString(strlen($value));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->email)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->email);
      }
      if (isset($this->user_id)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->user_id);
      }
      if (isset($this->auth_domain)) {
        $out->putVarInt32(26);
        $out->putPrefixedString($this->auth_domain);
      }
      if (isset($this->user_organization)) {
        $out->putVarInt32(34);
        $out->putPrefixedString($this->user_organization);
      }
      if (isset($this->is_admin)) {
        $out->putVarInt32(40);
        $out->putBoolean($this->is_admin);
      }
      if (isset($this->client_id)) {
        $out->putVarInt32(50);
        $out->putPrefixedString($this->client_id);
      }
      $this->checkProtoArray($this->scopes);
      foreach ($this->scopes as $value) {
        $out->putVarInt32(58);
        $out->putPrefixedString($value);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setEmail(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setUserId(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 26:
            $length = $d->getVarInt32();
            $this->setAuthDomain(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 34:
            $length = $d->getVarInt32();
            $this->setUserOrganization(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 40:
            $this->setIsAdmin($d->getBoolean());
            break;
          case 50:
            $length = $d->getVarInt32();
            $this->setClientId(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 58:
            $length = $d->getVarInt32();
            $this->addScopes(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->email)) return 'email';
      if (!isset($this->user_id)) return 'user_id';
      if (!isset($this->auth_domain)) return 'auth_domain';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasEmail()) {
        $this->setEmail($x->getEmail());
      }
      if ($x->hasUserId()) {
        $this->setUserId($x->getUserId());
      }
      if ($x->hasAuthDomain()) {
        $this->setAuthDomain($x->getAuthDomain());
      }
      if ($x->hasUserOrganization()) {
        $this->setUserOrganization($x->getUserOrganization());
      }
      if ($x->hasIsAdmin()) {
        $this->setIsAdmin($x->getIsAdmin());
      }
      if ($x->hasClientId()) {
        $this->setClientId($x->getClientId());
      }
      foreach ($x->getScopesList() as $v) {
        $this->addScopes($v);
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->email) !== isset($x->email)) return false;
      if (isset($this->email) && $this->email !== $x->email) return false;
      if (isset($this->user_id) !== isset($x->user_id)) return false;
      if (isset($this->user_id) && $this->user_id !== $x->user_id) return false;
      if (isset($this->auth_domain) !== isset($x->auth_domain)) return false;
      if (isset($this->auth_domain) && $this->auth_domain !== $x->auth_domain) return false;
      if (isset($this->user_organization) !== isset($x->user_organization)) return false;
      if (isset($this->user_organization) && $this->user_organization !== $x->user_organization) return false;
      if (isset($this->is_admin) !== isset($x->is_admin)) return false;
      if (isset($this->is_admin) && $this->is_admin !== $x->is_admin) return false;
      if (isset($this->client_id) !== isset($x->client_id)) return false;
      if (isset($this->client_id) && $this->client_id !== $x->client_id) return false;
      if (sizeof($this->scopes) !== sizeof($x->scopes)) return false;
      foreach (array_map(null, $this->scopes, $x->scopes) as $v) {
        if ($v[0] !== $v[1]) return false;
      }
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->email)) {
        $res .= $prefix . "email: " . $this->debugFormatString($this->email) . "\n";
      }
      if (isset($this->user_id)) {
        $res .= $prefix . "user_id: " . $this->debugFormatString($this->user_id) . "\n";
      }
      if (isset($this->auth_domain)) {
        $res .= $prefix . "auth_domain: " . $this->debugFormatString($this->auth_domain) . "\n";
      }
      if (isset($this->user_organization)) {
        $res .= $prefix . "user_organization: " . $this->debugFormatString($this->user_organization) . "\n";
      }
      if (isset($this->is_admin)) {
        $res .= $prefix . "is_admin: " . $this->debugFormatBool($this->is_admin) . "\n";
      }
      if (isset($this->client_id)) {
        $res .= $prefix . "client_id: " . $this->debugFormatString($this->client_id) . "\n";
      }
      foreach ($this->scopes as $value) {
        $res .= $prefix . "scopes: " . $this->debugFormatString($value) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class CheckOAuthSignatureRequest extends \google\net\ProtocolMessage {
    public function clear() {
    }
    public function byteSizePartial() {
      $res = 0;
      return $res;
    }
    public function outputPartial($out) {
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      return $res;
    }
  }
}
namespace google\appengine {
  class CheckOAuthSignatureResponse extends \google\net\ProtocolMessage {
    public function getOauthConsumerKey() {
      if (!isset($this->oauth_consumer_key)) {
        return '';
      }
      return $this->oauth_consumer_key;
    }
    public function setOauthConsumerKey($val) {
      $this->oauth_consumer_key = $val;
      return $this;
    }
    public function clearOauthConsumerKey() {
      unset($this->oauth_consumer_key);
      return $this;
    }
    public function hasOauthConsumerKey() {
      return isset($this->oauth_consumer_key);
    }
    public function clear() {
      $this->clearOauthConsumerKey();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->oauth_consumer_key)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->oauth_consumer_key));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->oauth_consumer_key)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->oauth_consumer_key);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setOauthConsumerKey(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->oauth_consumer_key)) return 'oauth_consumer_key';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasOauthConsumerKey()) {
        $this->setOauthConsumerKey($x->getOauthConsumerKey());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->oauth_consumer_key) !== isset($x->oauth_consumer_key)) return false;
      if (isset($this->oauth_consumer_key) && $this->oauth_consumer_key !== $x->oauth_consumer_key) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->oauth_consumer_key)) {
        $res .= $prefix . "oauth_consumer_key: " . $this->debugFormatString($this->oauth_consumer_key) . "\n";
      }
      return $res;
    }
  }
}
