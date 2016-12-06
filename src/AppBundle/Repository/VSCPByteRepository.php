<?php

namespace AppBundle\Repository;

/**
 * VSCPByteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VSCPByteRepository extends \Doctrine\ORM\EntityRepository
{
  public function GetVSCPByte()
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.vscpbyte,
      b.vscptype,
      b.vscptypeName,
      c.vscpclassName,
      a.vscpbyteDescription
      FROM AppBundle:VSCPByte a
      LEFT JOIN AppBundle:VSCPType b with a.vscpbytetype = b.id
      JOIN AppBundle:VSCPClass c with b.vscptypeclass = c.id
      ORDER BY a.vscpbyte
      ");
    return $query->getResult();

  }

  public function GetVSCPByteByType($vscptypeid)
  {

    $em = $this->getEntityManager();
    $query = $em->createQuery("
      SELECT
      a.id,
      a.vscpbyte,
      b.vscptype,
      b.vscptypeName,
      c.vscpclassName,
      a.vscpbyteDescription
      FROM AppBundle:VSCPByte a
      LEFT JOIN AppBundle:VSCPType b with a.vscpbytetype = b.id
      JOIN AppBundle:VSCPClass c with b.vscptypeclass = c.id
      where b.id = $vscptypeid
      ORDER BY a.vscpbyte
      ");
    return $query->getResult();

  }
}
