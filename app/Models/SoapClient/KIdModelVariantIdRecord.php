<?php
namespace App\Models\SoapClient;
class KIdModelVariantIdRecord
{

    /**
     * @var \DateTime $DatoDeaktiveret
     */
    protected $DatoDeaktiveret = null;

    /**
     * @var \DateTime $DatoOprettet
     */
    protected $DatoOprettet = null;

    /**
     * @var string $DMRkoeretoejIdent
     */
    protected $DMRkoeretoejIdent = null;

    /**
     * @var int $ModelVariantId
     */
    protected $ModelVariantId = null;

    /**
     * @var int $Q
     */
    protected $Q = null;

    /**
     * @param \DateTime $DatoDeaktiveret
     * @param \DateTime $DatoOprettet
     * @param int $ModelVariantId
     * @param int $Q
     */
    public function __construct(\DateTime $DatoDeaktiveret, \DateTime $DatoOprettet, $ModelVariantId, $Q)
    {
      $this->DatoDeaktiveret = $DatoDeaktiveret->format(\DateTime::ATOM);
      $this->DatoOprettet = $DatoOprettet->format(\DateTime::ATOM);
      $this->ModelVariantId = $ModelVariantId;
      $this->Q = $Q;
    }

    /**
     * @return \DateTime
     */
    public function getDatoDeaktiveret()
    {
      if ($this->DatoDeaktiveret == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatoDeaktiveret);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatoDeaktiveret
     * @return KIdModelVariantIdRecord
     */
    public function setDatoDeaktiveret(\DateTime $DatoDeaktiveret)
    {
      $this->DatoDeaktiveret = $DatoDeaktiveret->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatoOprettet()
    {
      if ($this->DatoOprettet == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatoOprettet);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatoOprettet
     * @return KIdModelVariantIdRecord
     */
    public function setDatoOprettet(\DateTime $DatoOprettet)
    {
      $this->DatoOprettet = $DatoOprettet->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDMRkoeretoejIdent()
    {
      return $this->DMRkoeretoejIdent;
    }

    /**
     * @param string $DMRkoeretoejIdent
     * @return KIdModelVariantIdRecord
     */
    public function setDMRkoeretoejIdent($DMRkoeretoejIdent)
    {
      $this->DMRkoeretoejIdent = $DMRkoeretoejIdent;
      return $this;
    }

    /**
     * @return int
     */
    public function getModelVariantId()
    {
      return $this->ModelVariantId;
    }

    /**
     * @param int $ModelVariantId
     * @return KIdModelVariantIdRecord
     */
    public function setModelVariantId($ModelVariantId)
    {
      $this->ModelVariantId = $ModelVariantId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQ()
    {
      return $this->Q;
    }

    /**
     * @param int $Q
     * @return KIdModelVariantIdRecord
     */
    public function setQ($Q)
    {
      $this->Q = $Q;
      return $this;
    }

}
