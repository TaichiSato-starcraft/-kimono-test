<section class="c-block-section n0">
    <div class="c-yellow-midashi">
        <h2 class="c-yellow-midashi__item mid-txt">
            <span class="p-search-icon"><img src="<?php bloginfo('template_url'); ?>/image/search.png" alt=""></span>着物買取店検索
        </h2>
    </div>
        <div class="p-search__wrapper">
        <div class="p-block-content">
            <div class="p-block-search">
                <form role="search" action="<?php echo home_url('/'); ?>" class="p-search-form" method="get">
                <input type="hidden" name="s">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="senmon" class="pulldowndesign mid-txt">
                                        <option value="0">着物専門</option>
                                        <option value="あり">あり</option>
                                        <option value="なし">なし</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="speed" class="pulldowndesign mid-txt">
                                        <option value="0">買取までの速さ</option>
                                        <option value="3">★★★</option>
                                        <option value="2">★★</option>
                                        <option value="1">★</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <select name="syuttyou" class="pulldowndesign mid-txt">
                                    <option value="0">出張買取</option>
                                    <option value="1">あり</option>
                                    <option value="2">なし</option>
                                </select>
                                </td>
                                <td>
                                <select name="genkin" class="pulldowndesign mid-txt">
                                    <option value="0">現金受取り</option>
                                    <option value="あり">あり</option>
                                    <option value="なし">なし</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <select name="denwa" class="pulldowndesign mid-txt">
                                    <option value="0">事前の電話相談</option>
                                    <option value="あり">あり</option>
                                    <option value="なし">なし</option>
                                </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="c-block-button" type="submit">
                        <div class="c-block-button__item">
                            <h2 class="mid-txt">この条件で検索</h2>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>