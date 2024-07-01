<?php
if (isset($_POST['id_nbr']) && isset($_POST['code_nbr']) && $result) {
?>
    <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
            <div class="col-lg-12">
                <h4 class="text-center">RESULTS</h4>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3 float-end">ONLINE VERIFICATION SERVICES - GFCO GEM LAB*</h5><br>
                        <table>
                            <tr>
                                <td class="pe-4">REPORT ID NBR</td>
                                <td>:</td>
                                <td class="ps-2 fw-bold text-black"><?= $result['nbr_id']; ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">CODE</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['code']; ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">DATE (DD/MM/YY)</td>
                                <td>:</td>
                                <td class="ps-2"><?= $db->date_format($result['date']); ?></td>
                            </tr>
                            <tr>
                                <td class="pt-3"><img src="<?= $result['image_link'] ?>" alt="" width="150"></td>
                            </tr>
                            <tr>
                                <td class="pe-4 pt-3">FAMILY/SPECIE</td>
                                <td class="pt-3">:</td>
                                <td class="ps-2 pt-3 fw-bold text-black"><?= $result['cate_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">TRADE NAME</td>
                                <td>:</td>
                                <td class="ps-2 text-danger fw-bold"><?= $result['name'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">WEIGHT</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['p_weight'] ?> CARATS</td>
                            </tr>
                            <tr>
                                <td class="pe-4">COLOR</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['var_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">SHAPE</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['shape'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">DEMESIONS</td>
                                <td>:</td>
                                <td class="ps-2">12.85 x 10.17 x 8.60 mm</td>
                            </tr>
                            <tr>
                                <td class="pe-4">CROWN CUT</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['crown_cut'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">PAVILLION CUT</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['pavillion_cut'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4 pt-4">ORIGIN</td>
                                <td class="pt-4">:</td>
                                <td class="ps-2 pt-4 fw-bold text-black"><?= $result['origin'] ?></td>
                            </tr>
                        </table>
                        <div>
                            <hr class="w-100 mt-5 border-2 text-dark">
                        </div>
                        <table>
                            <h6 class="fw-bold fst-italic">TESTING METHODS & RESULTS</h6>
                            <tr>
                                <td class="pe-4">REFRACTIVE INDEX</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['refractive_index'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">SPECIFIC GRAVITY</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['specific_gravity'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">POLARISCOPE</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['polarisscope'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">SPECTROSCOPE 400-700NM</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['spectroscope'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">STANDARD FLUORESCENCE LW/SW</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['standard_fluorescence'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">DICHROSCOPE</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['dichroscope'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">COBALT/CHROMIUM FILTER</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['cobalt'] ?></td>
                            </tr>
                            <tr>
                                <td class="pe-4">MICROSCOPE MAGNIFICATION 80X</td>
                                <td>:</td>
                                <td class="ps-2"><?= $result['microscope'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php
}
?>